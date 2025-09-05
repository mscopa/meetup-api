<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'name' => $this->name,
            'description' => $this->description,
            'image_url' => '/assets/images/mario-block.png',
            'price' => $this->price,
            'stock' => $this->stock,
            'meetup_session' => new MeetupSessionResource($this->whenLoaded('meetup_session')),
            'product_transactions' => ProductTransactionResource::collection($this->whenLoaded('product_transactions')),
        ];
    }
}
