<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
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
            'product_name' => $this->product->name,
            'quantity' => $this->quantity,
            'total_price' => $this->total_price,
            'retrieval_code' => $this->retrieval_code,
            'status' => $this->status, // 'pending' o 'retrieved'
            'purchased_at' => $this->timestamp,
        ];
    }
}
