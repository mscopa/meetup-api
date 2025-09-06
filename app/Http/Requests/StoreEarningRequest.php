<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEarningRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('assign-points');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // El ID de la compañía debe existir en la tabla 'companies'
            'company_id' => ['required', 'integer', 'exists:companies,id'],
            'reason' => ['required', 'string', 'max:255'],
            // Usamos 'present' para asegurarnos de que los campos lleguen, aunque sean 0.
            'coin_amount' => ['present', 'integer', 'min:0'],
            'score_amount' => ['present', 'integer', 'min:0'],
        ];
    }
}
