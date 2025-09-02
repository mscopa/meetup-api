<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EarningResource extends JsonResource
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
            'reason' => $this->reason,
            'coin_amount' => $this->coin_amount,
            'score_amount' => $this->score_amount,
            'administrator' => new AdministratorResource($this->whenLoaded('administrator')),
            'company' => new CompanyResource($this->whenLoaded('company')),
        ];
    }
}
