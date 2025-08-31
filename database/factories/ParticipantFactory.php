<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Company;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participant>
 */
class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Las claves foráneas (user_id y company_id) se asignarán en el Seeder
            // para asegurar que correspondan a entidades existentes en la base de datos.
            'user_id' => User::factory(),
            'company_id' => Company::factory(),
            'coins' => fake()->numberBetween(0, 100),
            'is_member' => fake()->boolean(),
            'kit_delivered' => fake()->boolean(),
        ];
    }
}
