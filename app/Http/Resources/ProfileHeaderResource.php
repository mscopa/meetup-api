<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileHeaderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        if ($this->company) {
            return [
                'type' => 'company',
                'company' => new CompanyResource($this->whenLoaded('company')),
                'meetup_session' => new MeetupSessionResource($this->whenLoaded('meetupSession')),
            ];
        }

        if ($this->administrator) {
            return [
                'type' => 'administrator',
                'administrator' => [
                    'first_name' => $this->administrator->first_name,
                    'last_name' => $this->administrator->last_name,
                    'role' => $this->administrator->role,
                ],
                'meetup_session' => new MeetupSessionResource($this->whenLoaded('meetupSession')),
            ];
        }
        return [];
    }
}
