<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $administrators = [
            [
                'user_id' => 14,
                'first_name' => 'Carolina',
                'middle_name' => '',
                'last_name' => 'López',
                'role' => 'Matrimonio Director',
            ],
            [
                'user_id' => 13,
                'first_name' => 'Mauro',
                'middle_name' => 'Sebastian',
                'last_name' => 'Copa',
                'role' => 'Administrador',
            ],
        ];

        DB::table('administrators')->insert($administrators);
    }
}
