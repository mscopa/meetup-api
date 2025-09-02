<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'meetup_session_id' => $this->meetup_session_id,
            'username' => $this->username,
            'company' => new CompanyResource($this->whenLoaded('company')),
            'administrator' => new AdministratorResource($this->whenLoaded('administrator')),
            'puzzles' => PuzzleResource::collection('puzzles'),
        ];
    }
}
