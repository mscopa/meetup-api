<?php

namespace Database\Seeders;

use App\Models\MeetupSession;
use App\Models\User;
use App\Models\Company;
use App\Models\Puzzle;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Creamos los puzzles. Serán los mismos para todas las sesiones y compañías.
        // Usamos una colección para poder manipularlos fácilmente más adelante.
        $puzzles = Puzzle::factory()->count(5)->create();

        // 2. Creamos 3 sesiones de Meetup
        $sessions = MeetupSession::factory()->count(3)->create();

        // 3. Iteramos sobre cada sesión para crear sus usuarios y compañías.
        // Esto mantiene la lógica organizada y asegura que los datos estén relacionados correctamente.
        foreach ($sessions as $session) {
            // Creamos 10 usuarios para esta sesión específica
            $usersInSession = User::factory()->count(10)->for($session)->create();

            // Creamos 5 compañías para esta sesión específica
            $companiesInSession = Company::factory()->count(5)->create();

            // 4. Asignamos los puzzles a las compañías de esta sesión
            foreach ($companiesInSession as $company) {
                // Tomamos una cantidad aleatoria de puzzles (entre 1 y 3) para que no todas las compañías tengan todos los puzzles.
                $puzzlesToAttach = $puzzles->pluck('id');
                
                // Usamos attach() para crear los registros en la tabla pivote `company_puzzles`.
                // El segundo argumento es un array con los valores para las columnas extra.
                $company->puzzles()->attach($puzzlesToAttach, ['is_unlocked' => false]);
            }

            // EXTRA: Llenamos la tabla `participants`
            // Asignamos cada usuario de la sesión a una compañía de la misma sesión.
            foreach ($usersInSession as $user) {
                $randomCompany = $companiesInSession->random();

                // Usamos la relación 'participations()' y el método 'create()'
                // para crear un nuevo registro 'Participant'.
                $user->participations()->create([
                    'company_id' => $randomCompany->id,
                    'coins' => rand(0, 100),
                    'is_member' => true,
                    'kit_delivered' => fake()->boolean()
                ]);
            }
        }
    }
}
