<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
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
            'number' => $this->number,
            'war_cry' => $this->war_cry,
            'coins' => $this->coins,
            'room' => $this->room,
            'participants' => ParticipantResource::collection($this->whenLoaded('participants')),
            'counselors' => CounselorResource::collection($this->whenLoaded('counselors')),
            'earnings' => EarningResource::collection($this->whenLoaded('earnings')),
            'user' => new UserResource($this->whenLoaded('user')),
        ];
    }
}
