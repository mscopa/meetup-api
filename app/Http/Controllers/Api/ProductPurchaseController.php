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
use Illuminate\Support\Str;

class ProductPurchaseController extends Controller
{
    public function __invoke(ProductPurchaseRequest $request): JsonResponse
    {
        $this->authorize('purchase', Product::class);

        $counselorId = null;
        foreach ($request->user()->currentAccessToken()->abilities as $ability) {
            if (str_starts_with($ability, 'counselor-id:')) {
                $counselorId = explode(':', $ability)[1];
                break;
            }
        }

        if (!$counselorId) {
            return response()->json(['message' => 'Acceso denegado: No se pudo verificar la identidad del consejero.'], 403);
        }

        $counselor = Counselor::findOrFail($counselorId);
        $company = $counselor->company;
        $items = $request->validated()['items'];
        $purchaseCodes = [];
        try {
            DB::transaction(function () use ($items, $company, $counselor, &$purchaseCodes) {
                $totalCost = 0;
                $productsToUpdate = [];

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

                $company->decrement('coins', $totalCost);
                foreach ($productsToUpdate as $data) {
                    $product = $data['product'];
                    $quantity = $data['quantity'];
                    $newCode = $this->generateUniqueCode();
                    $purchaseCodes[] = $newCode;
                    $product->decrement('stock', $quantity);
                    ProductTransaction::create([
                        'product_id' => $product->id,
                        'counselor_id' => $counselor->id,
                        'quantity' => $quantity,
                        'total_price' => $product->price * $quantity,
                        'retrieval_code' => $newCode,
                        'status' => 'pending',
                    ]);
                }
            });
        } catch (ValidationException $e) {
            return response()->json(['message' => 'Error de validación', 'errors' => $e->errors()], 422);
        }

        return response()->json([
            'message' => '¡Compra realizada con éxito!',
            'retrieval_code' => $purchaseCodes[0] ?? null 
        ], 200);
    }
    private function generateUniqueCode(): string
    {
        do {
            $code = strtoupper(Str::random(6));
        } while (ProductTransaction::where('retrieval_code', $code)->exists());
        
        return $code;
    }
}
