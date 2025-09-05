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
        'username' => $this->username,

        'administrator' => $this->when(
            $this->administrator !== null,
            new AdministratorResource($this->whenLoaded('administrator'))
        ),

        $this->mergeWhen($this->company !== null, [
            'company' => new CompanyResource($this->whenLoaded('company')),
        ]),
        
        'puzzles' => PuzzleResource::collection($this->whenLoaded('puzzles')),
        'meetupSession' => new MeetupSessionResource($this->whenLoaded('meetupSession')),
    ];
    }
}
