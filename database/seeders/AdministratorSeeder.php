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
                'user_id' => 4,
                'first_name' => 'Checkin',
                'middle_name' => 'Checkin',
                'last_name' => 'Checkin',
                'role' => 'Checkin',
            ],
            [
                'user_id' => 5,
                'first_name' => 'Caja',
                'middle_name' => 'Caja',
                'last_name' => 'Caja',
                'role' => 'Caja',
            ],
            [
                'user_id' => 6,
                'first_name' => 'Facilitador',
                'middle_name' => 'Facilitador',
                'last_name' => 'Facilitador',
                'role' => 'Facilitador',
            ],
            [
                'user_id' => 7,
                'first_name' => 'Matrimonio',
                'middle_name' => '',
                'last_name' => 'Director',
                'role' => 'Matrimonio Director',
            ],
        ];

        DB::table('administrators')->insert($administrators);
    }
}
