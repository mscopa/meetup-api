<?php

namespace App\Http\Resources;

use App\Models\Earning;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdministratorResource extends JsonResource
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
            'role' => $this->role,
            'earnings' => EarningResource::collection($this->whenLoaded('earnings')),
            'announcements' => AnnouncementResource::collection($this->whenLoaded('announcements')),
            'user' => new UserResource($this->whenLoaded('user')),
        ];
    }
}
