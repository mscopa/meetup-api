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
                'score' => 0,
                'coins' => 0,
                'room' => 'Primaria',
            ],
            [
                'user_id' => 2,
                'name' => 'Los Valientes de Judá',
                'number' => 2,
                'war_cry' => '¡Con valor y honor!',
                'score' => 0,
                'coins' => 0,
                'room' => 'Salón Cultural',
            ],
            [
                'user_id' => 3,
                'name' => 'Los Sabios de Salomón',
                'number' => 3,
                'war_cry' => '¡Con sabiduría y fuerza!',
                'score' => 0,
                'coins' => 0,
                'room' => 'Hombres Jóvenes',
            ],
        ];
        DB::table('companies')->insert($companies);
    }
}
