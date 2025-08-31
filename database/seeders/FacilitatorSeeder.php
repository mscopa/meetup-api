<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Facilitator;
use App\Enums\UserRole;

class FacilitatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // 1. Primero, creamos el usuario que será el facilitador.
        // Es buena idea darle datos específicos para poder identificarlo fácilmente.
        $facilitatorUser = User::factory()->create([
            'first_name' => 'Facilitador',
            'last_name' => 'Principal',
            'email' => 'facilitador@meetup.com',
            'role' => UserRole::Facilitador, // Asegúrate de que este rol exista en tu Enum UserRole
        ]);

        // 2. Luego, usamos el ID de ese usuario para crear el registro
        // en la tabla 'facilitators', vinculándolo.
        Facilitator::create([
            'user_id' => $facilitatorUser->id,
        ]);
    }
}
