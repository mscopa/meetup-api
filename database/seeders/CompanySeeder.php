<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $companies = [
            [
                'user_id' => 1,
                'name' => 'Los Herederos de Israel',
                'number' => 1,
                'war_cry' => '¡Por la fe y la familia!',
                'score' => 550,
                'coins' => 70,
                'room' => 'Primaria',
            ],
            [
                'user_id' => 2,
                'name' => 'Los Valientes de Judá',
                'number' => 2,
                'war_cry' => '¡Con valor y honor!',
                'score' => 750,
                'coins' => 90,
                'room' => 'Salón Cultural',
            ],
            [
                'user_id' => 3,
                'name' => 'Los Sabios de Salomón',
                'number' => 3,
                'war_cry' => '¡Con sabiduría y fuerza!',
                'score' => 300,
                'coins' => 80,
                'room' => 'Hombres Jóvenes',
            ],
        ];
        DB::table('companies')->insert($companies);
    }
}
