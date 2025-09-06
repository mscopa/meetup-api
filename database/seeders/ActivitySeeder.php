<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $activities = [
            [
                'meetup_session_id' => 1,
                'title' => 'Llegada de los jóvenes',
                'type' => 'Logística',
                'start_date' => Carbon::create(2025, 9, 6, 8, 30, 0), // 6 de Septiembre de 2025 a las 08:00
                'end_date' => Carbon::create(2025, 9, 6, 9, 30, 0),
                'modality' => 'Todos',
            ],
            [
                'meetup_session_id' => 1,
                'title' => 'Bienvenida - Snack',
                'type' => 'Logística',
                'start_date' => Carbon::create(2025, 9, 6, 9, 30, 0),
                'end_date' => Carbon::create(2025, 9, 6, 10, 0, 0),
                'modality' => 'Todos',
            ],
            [
                'meetup_session_id' => 1,
                'title' => 'Actividad 1: Creación de Escudo y Grito de Guerra',
                'type' => 'Presentación',
                'start_date' => Carbon::create(2025, 9, 6, 10, 0, 0),
                'end_date' => Carbon::create(2025, 9, 6, 10, 30, 0),
                'modality' => 'Todos',
            ],
            [
                'meetup_session_id' => 1,
                'title' => 'Presentación de escudo y grito de guerra',
                'type' => 'Presentación',
                'start_date' => Carbon::create(2025, 9, 6, 10, 30, 0),
                'end_date' => Carbon::create(2025, 9, 6, 11, 10, 0),
                'modality' => 'Todos',
            ],
            [
                'meetup_session_id' => 1,
                'title' => 'Volleyball de Toallas',
                'type' => 'Actividad Simultánea',
                'start_date' => Carbon::create(2025, 9, 6, 11, 10, 0),
                'end_date' => Carbon::create(2025, 9, 6, 11, 50, 0),
                'modality' => 'Todos',
            ],
            [
                'meetup_session_id' => 1,
                'title' => 'Rápido con las Plantas',
                'type' => 'Actividad Simultánea',
                'start_date' => Carbon::create(2025, 9, 6, 11, 50, 0),
                'end_date' => Carbon::create(2025, 9, 6, 12, 30, 0),
                'modality' => '4 compañías',
            ],
            [
                'meetup_session_id' => 1,
                'title' => 'Bloques Misteriosos',
                'type' => 'Actividad Simultánea - Seminario',
                'start_date' => Carbon::create(2025, 9, 6, 12, 30, 0),
                'end_date' => Carbon::create(2025, 9, 6, 13, 20, 0),
                'modality' => '2 compañías',
            ],
            [
                'meetup_session_id' => 1,
                'title' => 'Almuerzo',
                'type' => 'Logística',
                'start_date' => Carbon::create(2025, 9, 6, 13, 20, 0),
                'end_date' => Carbon::create(2025, 9, 6, 14, 20, 0),
                'modality' => 'Todos',
            ],
            [
                'meetup_session_id' => 1,
                'title' => 'Tuberías y Monedas',
                'type' => 'Actividad Simultánea',
                'start_date' => Carbon::create(2025, 9, 6, 14, 20, 0),
                'end_date' => Carbon::create(2025, 9, 6, 15, 10, 0),
                'modality' => '4 compañías',
            ],
            [
                'meetup_session_id' => 1,
                'title' => 'Estrellas de Fe',
                'type' => 'Actividad Simultánea - Servicio',
                'start_date' => Carbon::create(2025, 9, 6, 15, 10, 0),
                'end_date' => Carbon::create(2025, 9, 6, 15, 50, 0),
                'modality' => 'Todos',
            ],
            [
                'meetup_session_id' => 1,
                'title' => 'Actividad 7 - Felices 100 años',
                'type' => 'Centenario',
                'start_date' => Carbon::create(2025, 9, 6, 15, 50, 0),
                'end_date' => Carbon::create(2025, 9, 6, 16, 30, 0),
                'modality' => 'Todos',
            ],
            [
                'meetup_session_id' => 1,
                'title' => 'Snack',
                'type' => 'Tiempo Libre',
                'start_date' => Carbon::create(2025, 9, 6, 16, 30, 0),
                'end_date' => Carbon::create(2025, 9, 6, 17, 0, 0),
                'modality' => 'Todos',
            ],
            [
                'meetup_session_id' => 1,
                'title' => 'Fiesta de la Estrella',
                'type' => 'Baile',
                'start_date' => Carbon::create(2025, 9, 6, 17, 0, 0),
                'end_date' => Carbon::create(2025, 9, 6, 18, 30, 0),
                'modality' => 'Todos',
            ],
            [
                'meetup_session_id' => 1,
                'title' => 'Devocional: Mirad hacia Cristo',
                'type' => 'Devocional',
                'start_date' => Carbon::create(2025, 9, 6, 18, 30, 0),
                'end_date' => Carbon::create(2025, 9, 6, 19, 00, 0),
                'modality' => 'Todos',
            ],
            [
                'meetup_session_id' => 1,
                'title' => 'Despedida y Micros',
                'type' => 'Cierre',
                'start_date' => Carbon::create(2025, 9, 6, 19, 0, 0),
                'end_date' => Carbon::create(2025, 9, 6, 19, 10, 0),
                'modality' => 'Todos',
            ],
        ];

        DB::table('activities')->insert($activities);
    }
}
