<?php

namespace App\Services\PuzzleBuilders;

use App\Models\Puzzle;

class WordSearchBuilder
{
    public function build(Puzzle $puzzle): array
    {
        $puzzle->load('wordSearchWords');

        $wordsToFind = $puzzle->wordSearchWords->pluck('word');

        $solution = $puzzle->wordSearchWords->map(function ($word) {
            return [
                'word' => $word->word,
                'start_row' => $word->start_row,
                'start_col' => $word->start_col,
                'end_row' => $word->end_row,
                'end_col' => $word->end_col,
            ];
        });

        return [
            'id' => $puzzle->id,
            'title' => $puzzle->title,
            'grid' => $puzzle->grid_data,
            'words_to_find' => $wordsToFind,
            'solution' => $solution,
        ];
    }
}