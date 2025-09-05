<?php

namespace App\Services\PuzzleBuilders;

use App\Models\Puzzle;

class WordSearchBuilder
{
    public function build(Puzzle $puzzle): array
    {
        $puzzle->load('wordSearchWords');

        // 1. Obtenemos las palabras a encontrar de la relación
        $wordsToFind = $puzzle->wordSearchWords->pluck('word');

        // 2. Construimos el array de la solución con las coordenadas
        $solution = $puzzle->wordSearchWords->map(function ($word) {
            return [
                'word' => $word->word,
                'start_row' => $word->start_row,
                'start_col' => $word->start_col,
                'end_row' => $word->end_row,
                'end_col' => $word->end_col,
            ];
        });

        // 3. Devolvemos el JSON final
        return [
            'id' => $puzzle->id,
            'title' => $puzzle->title,
            'grid' => $puzzle->grid_data, // La grilla la leemos directamente de la nueva columna
            'words_to_find' => $wordsToFind,
            'solution' => $solution,
        ];
    }
}