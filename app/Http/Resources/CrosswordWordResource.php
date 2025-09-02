<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CrosswordWordResource extends JsonResource
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
            'puzzle_id' => $this->puzzle_id,
            'word' => $this->word,
            'normalized_word' => $this->normalized_word,
            'clue' => $this->clue,
            'direction' => $this->direction,
            'row' => $this->row,
            'col' => $this->col,
            'puzzle' => new PuzzleResource($this->whenLoaded('puzzle')),
        ];
    }
}
