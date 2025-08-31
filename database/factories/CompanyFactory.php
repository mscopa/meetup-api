<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Genera un nombre de compañía único
            'name' => fake()->unique()->company(),
            // Genera un número de compañía aleatorio entre 1 y 10
            'number' => fake()->numberBetween(1, 10),
            // Genera un "grito de guerra" aleatorio
            'war_cry' => fake()->sentence(3),
            // El 'score' tiene un valor por defecto en la migración, así que no es necesario definirlo aquí
            'score' => fake()->numberBetween(0, 1000), // Opcional: puedes definir un score inicial
        ];
    }
}
