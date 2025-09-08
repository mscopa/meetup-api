<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ParticipantListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'full_name' => $this->first_name . ' ' . $this->last_name,
            'company_display' => 'Compañía ' . $this->company->number,
            'attended' => (bool) $this->attended,
            'kit_delivered' => (bool) $this->kit_delivered,
            'tshirt_size' => $this->tshirt_size,
        ];
    }
}
