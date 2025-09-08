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
                'name' => 'San Isidro-Tigre',
                'location' => 'Av. del Libertador 1599, San Isidro, Buenos Aires',
            ],
            [
                'name' => 'Morón-Haedo',
                'location' => 'Calle Rivadavia 4500, Haedo, Buenos Aires',
            ],
            [
                'name' => 'La Plata-Berisso',
                'location' => 'Calle 12 345, La Plata, Buenos Aires',
            ],
        ];

        DB::table('meetup_sessions')->insert($meetupSessions);
    }
}
