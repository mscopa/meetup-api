<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Activity;
use App\Models\SessionActivity;
use Carbon\Carbon;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // --- SESIÓN 1 ---
        // Suponemos que el meetup_session_id = 1 y facilitator_id = 1
        // Deberías ajustar estos IDs a los que correspondan en tu base de datos.

        // Actividad 1: Llegada
        $llegada = Activity::create([
            'meetup_session_id' => 1,
            'title' => 'Llegada de los jóvenes',
            'type' => 'Logística',
            'duration' => 30,
            'modality' => 'Todos'
        ]);

        SessionActivity::create([
            'activity_id' => $llegada->id,
            'start_time' => Carbon::create(2025, 9, 6, 8, 0, 0), // 6 de Septiembre de 2025 a las 08:00
            'end_time' => Carbon::create(2025, 9, 6, 8, 30, 0),
        ]);


        // Actividad 2: Devocional
        $devocional = Activity::create([
            'meetup_session_id' => 1,
            'title' => 'Devocional de Apertura',
            'type' => 'Espiritual',
            'duration' => 30,
            'modality' => 'Todos'
        ]);

        SessionActivity::create([
            'activity_id' => $devocional->id,
            'start_time' => Carbon::create(2025, 8, 31, 17, 0, 0),
            'end_time' => Carbon::create(2025, 8, 31, 17, 30, 0),
        ]);


        // Actividad 3: Juego
        $juego = Activity::create([
            'meetup_session_id' => 1,
            'title' => 'Juego: Tuberías y Monedas',
            'type' => 'Juego',
            'duration' => 90,
            'modality' => 'Compañías'
        ]);

        SessionActivity::create([
            'activity_id' => $juego->id,
            'start_time' => Carbon::create(2025, 8, 31, 17, 30, 0),
            'end_time' => Carbon::create(2025, 8, 31, 19, 0, 0),
        ]);
    }
}
