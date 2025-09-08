<?php

namespace App\Services\PuzzleBuilders;

use App\Models\Puzzle;

class CrosswordBuilder
{
    public function build(Puzzle $puzzle): array
    {
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
            $lettersWithSpaces = str_split($word->word);

            foreach ($lettersWithSpaces as $index => $letter) {
                $r = $word->row;
                $c = $word->col;
                if ($word->direction === 'horizontal') {
                    $c += $index;
                } else {
                    $r += $index;
                }
                if ($letter === ' ') {
                    continue;
                }
                if (isset($grid[$r][$c])) {
                    $grid[$r][$c]['char'] = $letter;
                    $grid[$r][$c]['is_blank'] = false;
                }
            }
        }
        
        usort($acrossClues, fn($a, $b) => $a['number'] <=> $b['number']);
        usort($downClues, fn($a, $b) => $a['number'] <=> $b['number']);

        $playableCells = [];
        foreach ($grid as $rowIndex => $row) {
            foreach ($row as $colIndex => $cell) {
                if ($cell['is_blank'] === false) {
                    $playableCells[] = ['r' => $rowIndex, 'c' => $colIndex];
                }
            }
        }

        shuffle($playableCells);

        $numberOfHelps = min(5, count($playableCells));

        $cellsToReveal = array_slice($playableCells, 0, $numberOfHelps);

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