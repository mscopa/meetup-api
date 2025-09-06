<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreParticipantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Usamos el Gate que ya existe para el check-in
        return $this->user()->can('perform-check-in');
    }

    public function rules(): array
    {
        // Solo validamos los campos mínimos y necesarios
        return [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'company_id' => ['required', 'integer', 'exists:companies,id'],
            'tshirt_size' => ['required', 'string', 'max:10'],
        ];
    }
}
