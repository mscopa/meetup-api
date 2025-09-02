<?php

namespace App\Http\Requests;

use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Usamos nuestra ProductPolicy para verificar si el usuario puede crear productos.
        // Es una doble capa de seguridad junto con la del controlador.
        return $this->user()->can('create', Product::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('products')->where('meetup_session_id', $this->user()->meetup_session_id),
            ],
            'description' => ['nullable', 'string', 'max:1000'], // La descripción es opcional.
            'price' => ['required', 'numeric', 'min:0'], // El precio es requerido y no puede ser negativo.
            'stock' => ['required', 'integer', 'min:0'], // El stock es requerido, debe ser un número entero y no negativo.
        ];
    }
}
