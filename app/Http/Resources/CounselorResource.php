<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CounselorResource extends JsonResource
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
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'pin' => $this->pin,
            'type' => $this->type,
            'gender' => $this->gender,
            'dietary_restrictions' => $this->dietary_restrictions,
            'tshirt_size' => $this->tshirt_size,
            'approval_status' => $this->approval_status,
            'attended' => $this->attended,
            'is_member' => $this->is_member,
            'checkin' => $this->checkin,
            'product_transactions' => ProductTransactionResource::collection($this->whenLoaded('product_transactions')),
            'company' => new CompanyResource($this->whenLoaded('company')),
        ];
    }
}
