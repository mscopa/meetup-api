<?php

namespace App\Services\PuzzleBuilders;

use App\Models\Puzzle;

class CrosswordBuilder
{
    public function build(Puzzle $puzzle): array
    {
        // ¡Aquí va el algoritmo mágico que ya construimos!
        $puzzle->load('crosswordWords');

        $rows = $puzzle->rows;
        $cols = $puzzle->cols;
        $grid = array_fill(0, $rows, array_fill(0, $cols, [
            'char' => null, 'is_blank' => true, 'number' => null
        ]));
        $acrossClues = [];
        $downClues = [];
        $clueNumber = 1;
        $assignedNumbers = [];

        $words = $puzzle->crosswordWords->sortBy(['row', 'col']);

        foreach ($words as $word) {
            // ... (toda la lógica del bucle que ya tenés) ...
            $startPosKey = "{$word->row}-{$word->col}";
            $currentClueNumber = 0;

            if (!isset($assignedNumbers[$startPosKey])) {
                $currentClueNumber = $clueNumber;
                $assignedNumbers[$startPosKey] = $clueNumber;
                $grid[$word->row][$word->col]['number'] = $clueNumber;
                $clueNumber++;
            } else {
                $currentClueNumber = $assignedNumbers[$startPosKey];
            }

            $clueData = [ 'number' => $currentClueNumber, 'clue'   => $word->clue, 'word'   => $word->word ];
            if ($word->direction === 'horizontal') $acrossClues[] = $clueData;
            else $downClues[] = $clueData;
            
            // ANTES (usaba la palabra normalizada):
            // $letters = str_split($word->normalized_word);
            // foreach ($letters as $index => $letter) { ... }

            // AHORA (usamos la palabra original con espacios):
            $lettersWithSpaces = str_split($word->word); // ej: ['R','U','S','S','E','L','L',' ','M',' ','N','E','L','S','O','N']

            foreach ($lettersWithSpaces as $index => $letter) {
                $r = $word->row;
                $c = $word->col;

                // Calculamos la posición basándonos en el índice del bucle
                if ($word->direction === 'horizontal') {
                    $c += $index;
                } else {
                    $r += $index;
                }
                
                // ¡LA CLAVE! Si el caracter es un espacio, no hacemos nada y pasamos al siguiente.
                // La celda se quedará como "is_blank: true".
                if ($letter === ' ') {
                    continue;
                }

                // Si es una letra, la estampamos en la grilla.
                if (isset($grid[$r][$c])) {
                    $grid[$r][$c]['char'] = $letter;
                    $grid[$r][$c]['is_blank'] = false;
                }
            }
        }
        
        usort($acrossClues, fn($a, $b) => $a['number'] <=> $b['number']);
        usort($downClues, fn($a, $b) => $a['number'] <=> $b['number']);

        $playableCells = [];
        // Recorremos la grilla ya completa para encontrar todas las celdas con letras
        foreach ($grid as $rowIndex => $row) {
            foreach ($row as $colIndex => $cell) {
                if ($cell['is_blank'] === false) {
                    // Guardamos las coordenadas de cada celda jugable
                    $playableCells[] = ['r' => $rowIndex, 'c' => $colIndex];
                }
            }
        }

        // Barajamos aleatoriamente el array de celdas jugables
        shuffle($playableCells);

        // Decidimos cuántas letras de ayuda mostrar (ej: 5, o un porcentaje del total)
        $numberOfHelps = min(5, count($playableCells)); // Mostramos 5 o menos si hay menos celdas

        // Tomamos las primeras N celdas del array barajado
        $cellsToReveal = array_slice($playableCells, 0, $numberOfHelps);

        // Marcamos esas celdas en nuestra grilla con una nueva propiedad 'is_help'
        foreach ($cellsToReveal as $cellCoord) {
            $grid[$cellCoord['r']][$cellCoord['c']]['is_help'] = true;
        }

        return [
            'id'    => $puzzle->id,
            'title' => $puzzle->title,
            'grid_dimensions' => ['rows' => $rows, 'cols' => $cols],
            'grid'  => $grid,
            'clues' => ['across' => $acrossClues, 'down' => $downClues],
        ];
    }
}