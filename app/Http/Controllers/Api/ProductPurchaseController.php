<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductPurchaseRequest;
use App\Models\Counselor;
use App\Models\Product;
use App\Models\ProductTransaction;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class ProductPurchaseController extends Controller
{
    /**
     * Maneja la acción de comprar uno o más productos por parte de un consejero.
     */
    public function __invoke(ProductPurchaseRequest $request): JsonResponse
    {
        // 1. AUTORIZACIÓN: Verificamos con la Policy si el token tiene la habilidad para comprar.
        // Esta es la primera barrera de seguridad.
        $this->authorize('purchase', Product::class);

        // 2. OBTENER AL CONSEJERO DESDE EL TOKEN:
        // Esta es la parte nueva y más importante.
        $counselorId = null;
        foreach ($request->user()->currentAccessToken()->abilities as $ability) {
            if (str_starts_with($ability, 'counselor-id:')) {
                $counselorId = explode(':', $ability)[1];
                break;
            }
        }

        // Medida de seguridad extra. Si no encontramos el ID, algo está muy mal.
        if (!$counselorId) {
            return response()->json(['message' => 'Acceso denegado: No se pudo verificar la identidad del consejero.'], 403);
        }

        // 3. Obtener los actores principales
        $counselor = Counselor::findOrFail($counselorId);
        $company = $counselor->company; // A través del consejero, llegamos a su compañía
        $items = $request->validated()['items'];

        try {
            DB::transaction(function () use ($items, $company, $counselor) {
                $totalCost = 0;
                $productsToUpdate = [];

                // Primera pasada: Verificaciones
                foreach ($items as $item) {
                    $product = Product::find($item['product_id']);
                    if ($product->stock < $item['quantity']) {
                        throw ValidationException::withMessages([
                            'items' => "No hay stock suficiente para el producto: {$product->name}. Stock disponible: {$product->stock}.",
                        ]);
                    }
                    $totalCost += $product->price * $item['quantity'];
                    $productsToUpdate[] = ['product' => $product, 'quantity' => $item['quantity']];
                }

                if ($company->coins < $totalCost) {
                    throw ValidationException::withMessages([
                        'company' => "La compañía no tiene suficientes monedas. Necesario: {$totalCost}, Disponible: {$company->coins}.",
                    ]);
                }

                // Segunda pasada: Aplicar cambios
                $company->decrement('coins', $totalCost);
                foreach ($productsToUpdate as $data) {
                    $product = $data['product'];
                    $quantity = $data['quantity'];
                    $product->decrement('stock', $quantity);
                    ProductTransaction::create([
                        'product_id' => $product->id,
                        'counselor_id' => $counselor->id,
                        'quantity' => $quantity,
                        'total_price' => $product->price * $quantity,
                    ]);
                }
            });
        } catch (ValidationException $e) {
            return response()->json(['message' => 'Error de validación', 'errors' => $e->errors()], 422);
        }

        return response()->json(['message' => '¡Compra realizada con éxito!'], 200);
    }
}
