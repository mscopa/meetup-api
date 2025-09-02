<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeetupSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $meetupSessions = [
            [
                'name' => 'Castelar-Caseros',
                'location' => 'Arrecifes 1253, Castelar, Buenos Aires',
            ],
            [
                'name' => 'Luján-Merlo',
                'location' => 'Avellaneda 485, Merlo, Buenos Aires',
            ],
            [
                'name' => 'Marcos Paz-Chivilcoy',
                'location' => 'Av. Dr. Marcos Paz 2329, Ruta 200, Marcos Paz, Buenos Aires',
            ],
        ];

        DB::table('meetup_sessions')->insert($meetupSessions);
    }
}
