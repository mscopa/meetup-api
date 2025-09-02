<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PuzzleResource extends JsonResource
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
            'title' => $this->title,
            'description' => $this->description,
            'type' => $this->type,
            'is_enabled' => $this->is_enabled,
            'crossword_words' => CrosswordWordResource::collection($this->whenLoaded('crossword_words')),
            'word_search_words' => WordSearchWordResource::collection($this->whenLoaded('word_search_words')),
            'user' => new UserResource($this->whenLoaded('user')),
        ];
    }
}
