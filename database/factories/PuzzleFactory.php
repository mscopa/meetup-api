<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Puzzle>
 */
class PuzzleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = fake()->randomElement(['crucigrama', 'sopa_de_letras']);
        $filePath = '';
        if ($type === 'crucigrama') {
            $filePath = storage_path('app/puzzles/crosswords.json');
        } else {
            $filePath = storage_path('app/puzzles/crosswords.json');
        }

        $jsonData = file_get_contents($filePath);

        $contentArray = json_decode($jsonData, true);

        return [
            'title' => $contentArray['title'] ?? fake()->word(),
            'description' => fake()->text(),
            'type' => $type,
            'content' => $contentArray,
        ];
    }
}
