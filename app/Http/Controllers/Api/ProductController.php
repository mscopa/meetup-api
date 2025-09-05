<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // 1. Autorizamos con la Policy: ¿Puede el usuario ver la lista de productos?
        $this->authorize('viewAny', Product::class);

        // 2. Obtenemos el usuario y su meetup_session_id
        $user = $request->user();

        // 3. Filtramos los productos para mostrar solo los de su sesión.
        $products = Product::where('meetup_session_id', $user->meetup_session_id)->paginate();

        // 4. Devolvemos la lista de productos usando el Resource.
        return ProductResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        // 1. La autorización ya está en la Policy, solo la llamamos.
        $this->authorize('create', Product::class);

        // 2. La validación la hace 'StoreProductRequest' automáticamente.
        $product = Product::create($request->validated());

        // 3. Devolvemos el producto recién creado, con código 201 (Created).
        return (new ProductResource($product))
                ->response()
                ->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // 1. Autorizamos: ¿Puede el usuario ver ESTE producto?
        $this->authorize('view', $product);
        
        // 2. Devolvemos el producto usando el Resource.
        return new ProductResource($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        // 1. Autorizamos la acción sobre este producto específico.
        $this->authorize('update', $product);

        // 2. La validación la hace 'UpdateProductRequest'.
        $product->update($request->validated());

        // 3. Devolvemos el producto actualizado.
        return new ProductResource($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // 1. Autorizamos la eliminación.
        $this->authorize('delete', $product);

        // 2. Eliminamos el producto.
        $product->delete();

        // 3. Devolvemos una respuesta vacía con código 204 (No Content), el estándar para DELETE.
        return response()->noContent();
    }
}
