<?php

namespace Database\Seeders;

use App\Models\Puzzle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PuzzleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $puzzles = [
            [
                'user_id' => 1,
                'title' => 'Crucigrama 1',
                'description' => 'Un crucigrama es un juego de palabras en el que se deben completar casillas en blanco con letras, formando palabras a partir de pistas dadas.',
                'type' => 'Crucigrama',
                'rows' => 20,
                'cols' => 17,
                'grid_data' => null,
                'is_enabled' => true,
            ],
            [
                'user_id' => 1,
                'title' => 'Crucigrama 2',
                'description' => 'Un crucigrama es un juego de palabras en el que se deben completar casillas en blanco con letras, formando palabras a partir de pistas dadas.',
                'type' => 'Crucigrama',
                'rows' => 13,
                'cols' => 18,
                'grid_data' => null,
                'is_enabled' => true,
            ],
            [
                'user_id' => 1,
                'title' => 'Crucigrama 3',
                'description' => 'Un crucigrama es un juego de palabras en el que se deben completar casillas en blanco con letras, formando palabras a partir de pistas dadas.',
                'type' => 'Crucigrama',
                'rows' => 19,
                'cols' => 19,
                'grid_data' => null,
                'is_enabled' => true,
            ],
            [
                'user_id' => 1,
                'title' => 'Atributos de Jesucristo',
                'description' => 'Encuentra los atributos de Jesucristo ocultos en la sopa de letras.',
                'type' => 'Sopa de Letras',
                'rows' => 7,
                'cols' => 11,
                'grid_data' => [
                    ['E', 'C', 'I', 'O', 'U', 'P', 'N', 'A', 'B', 'R', 'A', 'L', 'E', 'Y', 'U', 'O', 'S', 'M', 'T', 'R'],
                    ['N', 'P', 'H', 'E', 'C', 'S', 'B', 'R', 'P', 'Z', 'E', 'D', 'T', 'L', 'N', 'C', 'E', 'E', 'I', 'S'],
                    ['C', 'O', 'M', 'P', 'A', 'S', 'I', 'O', 'N', 'P', 'N', 'T', 'U', 'Z', 'R', 'O', 'R', 'V', 'I', 'A'],
                    ['S', 'P', 'S', 'L', 'M', 'E', 'O', 'A', 'F', 'O', 'G', 'R', 'A', 'L', 'S', 'T', 'V', 'G', 'O', 'N'],
                    ['I', 'A', 'N', 'A', 'E', 'L', 'R', 'P', 'I', 'S', 'R', 'U', 'R', 'A', 'O', 'T', 'I', 'I', 'D', 'T'],
                    ['V', 'E', 'P', 'H', 'B', 'E', 'T', 'C', 'A', 'C', 'A', 'R', 'I', 'D', 'A', 'D', 'C', 'Y', 'S', 'I'],
                    ['E', 'I', 'M', 'D', 'P', 'I', 'C', 'O', 'A', 'R', 'T', 'U', 'W', 'E', 'D', 'M', 'I', 'G', 'N', 'D'],
                    ['I', 'T', 'U', 'S', 'O', 'E', 'D', 'M', 'B', 'N', 'I', 'R', 'C', 'O', 'S', 'A', 'O', 'E', 'M', 'A'],
                    ['P', 'D', 'E', 'O', 'T', 'C', 'L', 'U', 'Y', 'A', 'T', 'N', 'F', 'R', 'E', 'S', 'M', 'C', 'O', 'D'],
                    ['G', 'T', 'W', 'O', 'P', 'A', 'Z', 'I', 'R', 'C', 'U', 'X', 'R', 'E', 'A', 'T', 'I', 'O', 'S', 'D'],
                    ['P', 'N', 'R', 'R', 'L', 'O', 'D', 'E', 'U', 'I', 'D', 'P', 'N', 'O', 'A', 'E', 'H', 'E', 'R', 'F'],
                    ['S', 'P', 'D', 'I', 'N', 'U', 'A', 'E', 'D', 'P', 'A', 'I', 'O', 'B', 'A', 'M', 'U', 'T', 'M', 'O'],
                    ['P', 'A', 'C', 'I', 'E', 'N', 'C', 'I', 'A', 'L', 'E', 'R', 'P', 'N', 'U', 'P', 'M', 'O', 'I', 'R'],
                    ['X', 'E', 'R', 'C', 'O', 'N', 'O', 'C', 'I', 'M', 'I', 'E', 'N', 'T', 'O', 'L', 'I', 'A', 'P', 'T'],
                    ['N', 'K', 'V', 'G', 'E', 'D', 'A', 'N', 'R', 'I', 'C', 'E', 'T', 'A', 'O', 'A', 'L', 'L', 'M', 'A'],
                    ['N', 'E', 'S', 'J', 'I', 'R', 'P', 'E', 'R', 'D', 'O', 'N', 'Z', 'E', 'O', 'N', 'D', 'D', 'C', 'L'],
                    ['A', 'V', 'E', 'R', 'D', 'A', 'D', 'Z', 'M', 'K', 'S', 'U', 'A', 'I', 'O', 'Z', 'A', 'E', 'T', 'E'],
                    ['U', 'S', 'A', 'I', 'H', 'F', 'Y', 'D', 'J', 'U', 'S', 'T', 'I', 'C', 'I', 'A', 'D', 'R', 'O', 'Z'],
                    ['H', 'C', 'N', 'E', 'L', 'K', 'P', 'R', 'O', 'B', 'E', 'D', 'I', 'E', 'N', 'C', 'I', 'A', 'O', 'A'],
                    ['U', 'I', 'K', 'E', 'M', 'I', 'S', 'E', 'R', 'I', 'C', 'O', 'R', 'D', 'I', 'A', 'A', 'C', 'B', 'S']
                ],
                'is_enabled' => true,
            ],
            [
                'user_id' => 1,
                'title' => 'Enseñanzas de la Iglesia',
                'description' => 'Busca y encuentra palabras relacionadas con las enseñanzas de la Iglesia en la sopa de letras.',
                'type' => 'Sopa de Letras',
                'rows' => 5,
                'cols' => 10,
                'grid_data' => [
                    ['A', 'E', 'M', 'T', 'O', 'N', 'L', 'D', 'R', 'R', 'E', 'V', 'E', 'L', 'A', 'C', 'I', 'O', 'N', 'T'],
                    ['S', 'E', 'R', 'V', 'I', 'C', 'I', 'O', 'E', 'T', 'E', 'R', 'N', 'I', 'D', 'A', 'D', 'A', 'O', 'C'],
                    ['I', 'P', 'R', 'O', 'P', 'O', 'S', 'I', 'T', 'O', 'L', 'D', 'R', 'V', 'P', 'C', 'O', 'S', 'E', 'R'],
                    ['I', 'T', 'C', 'P', 'L', 'F', 'M', 'E', 'D', 'B', 'S', 'N', 'O', 'P', 'I', 'T', 'B', 'O', 'A', 'L'],
                    ['E', 'I', 'C', 'E', 'Y', 'S', 'F', 'T', 'O', 'L', 'A', 'T', 'I', 'C', 'E', 'E', 'R', 'N', 'T', 'O'],
                    ['C', 'U', 'I', 'S', 'N', 'R', 'M', 'O', 'I', 'S', 'N', 'U', 'P', 'C', 'E', 'M', 'N', 'T', 'A', 'P'],
                    ['F', 'S', 'N', 'P', 'D', 'E', 'A', 'T', 'P', 'E', 'P', 'O', 'T', 'L', 'M', 'P', 'C', 'E', 'U', 'E'],
                    ['O', 'A', 'M', 'I', 'L', 'I', 'E', 'C', 'I', 'O', 'A', 'P', 'W', 'I', 'D', 'L', 'T', 'A', 'N', 'V'],
                    ['R', 'I', 'E', 'R', 'V', 'H', 'O', 'M', 'N', 'I', 'Z', 'E', 'R', 'C', 'S', 'O', 'S', 'A', 'G', 'A'],
                    ['E', 'O', 'T', 'I', 'N', 'C', 'A', 'R', 'E', 'A', 'H', 'I', 'U', 'O', 'P', 'M', 'D', 'O', 'T', 'N'],
                    ['D', 'M', 'C', 'T', 'I', 'L', 'D', 'N', 'A', 'U', 'S', 'R', 'C', 'O', 'F', 'N', 'O', 'N', 'M', 'G'],
                    ['E', 'O', 'I', 'U', 'L', 'T', 'E', 'S', 'T', 'I', 'M', 'O', 'N', 'I', 'O', 'E', 'D', 'A', 'P', 'E'],
                    ['N', 'R', 'C', 'E', 'E', 'S', 'A', 'C', 'E', 'R', 'D', 'O', 'C', 'I', 'O', 'R', 'T', 'O', 'K', 'L'],
                    ['C', 'A', 'S', 'S', 'A', 'L', 'R', 'O', 'C', 'S', 'I', 'D', 'C', 'R', 'L', 'O', 'A', 'A', 'S', 'I'],
                    ['I', 'C', 'D', 'U', 'C', 'P', 'E', 'N', 'Y', 'G', 'A', 'A', 'R', 'C', 'D', 'E', 'B', 'R', 'S', 'O'],
                    ['O', 'I', 'A', 'R', 'R', 'E', 'P', 'E', 'N', 'T', 'I', 'M', 'I', 'E', 'N', 'T', 'O', 'V', 'A', 'O'],
                    ['N', 'O', 'S', 'L', 'N', 'D', 'G', 'O', 'A', 'P', 'R', 'H', 'W', 'P', 'I', 'M', 'L', 'A', 'O', 'V'],
                    ['T', 'N', 'E', 'P', 'I', 'A', 'O', 'C', 'X', 'E', 'H', 'P', 'W', 'G', 'A', 'N', 'R', 'A', 'E', 'S'],
                    ['M', 'I', 'O', 'L', 'T', 'A', 'R', 'E', 'E', 'O', 'V', 'L', 'A', 'M', 'U', 'G', 'I', 'E', 'Y', 'H'],
                    ['A', 'F', 'T', 'D', 'I', 'S', 'C', 'I', 'P', 'U', 'L', 'O', 'O', 'M', 'N', 'R', 'E', 'X', 'A', 'I']
                ],
                'is_enabled' => true,
            ],
        ];

        foreach ($puzzles as $puzzleData) {
            Puzzle::create($puzzleData);
        }
    }
}
