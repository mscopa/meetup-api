<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Obtenemos el producto que se está intentando actualizar desde la ruta.
        $product = $this->route('product');
        
        // Verificamos si el usuario puede actualizar ESTE producto en específico.
        return $this->user()->can('update', $product);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // Obtenemos el producto de la ruta para usar su ID.
        $product = $this->route('product');

        return [
            // 'sometimes' significa que solo se validará si el campo está presente en la petición.
            // Esto permite actualizar solo el precio o el stock sin tener que enviar el nombre.
            'name' => [
                'sometimes',
                'required',
                'string',
                'max:255',
                // La regla 'unique' es la más importante aquí.
                // Le decimos a Laravel que ignore el ID del producto actual al verificar si el nombre es único.
                // Sin esto, no podrías guardar el producto sin cambiarle el nombre, ¡daría un error de duplicado!
                Rule::unique('products')
                    ->where('meetup_session_id', $this->user()->meetup_session_id)
                    ->ignore($product->id),
            ],
            'description' => ['sometimes', 'nullable', 'string', 'max:1000'],
            'price' => ['sometimes', 'required', 'numeric', 'min:0'],
            'stock' => ['sometimes', 'required', 'integer', 'min:0'],
        ];
    }
}
