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
                'first_name' => 'Guada',
                'middle_name' => 'Y',
                'last_name' => 'Willy',
                'role' => 'Matrimonio Director',
            ],
            [
                'user_id' => 13,
                'first_name' => 'Mauro',
                'middle_name' => 'Sebastian',
                'last_name' => 'Copa',
                'role' => 'Administrador',
            ],
            [
                'user_id' => 15,
                'first_name' => 'Facilitador 1',
                'middle_name' => 'Facilitador',
                'last_name' => 'Facilitador',
                'role' => 'Facilitador',
            ],
            [
                'user_id' => 16,
                'first_name' => 'Facilitador 2',
                'middle_name' => 'Facilitador',
                'last_name' => 'Facilitador',
                'role' => 'Facilitador',
            ],
            [
                'user_id' => 17,
                'first_name' => 'Facilitador 3',
                'middle_name' => 'Facilitador',
                'last_name' => 'Facilitador',
                'role' => 'Facilitador',
            ],
            [
                'user_id' => 18,
                'first_name' => 'Facilitador 4',
                'middle_name' => 'Facilitador',
                'last_name' => 'Facilitador',
                'role' => 'Facilitador',
            ],
            [
                'user_id' => 19,
                'first_name' => 'Facilitador 5',
                'middle_name' => 'Facilitador',
                'last_name' => 'Facilitador',
                'role' => 'Facilitador',
            ],
            [
                'user_id' => 20,
                'first_name' => 'Facilitador 6',
                'middle_name' => 'Facilitador',
                'last_name' => 'Facilitador',
                'role' => 'Facilitador',
            ],
            [
                'user_id' => 21,
                'first_name' => 'Facilitador 7',
                'middle_name' => 'Facilitador',
                'last_name' => 'Facilitador',
                'role' => 'Facilitador',
            ],
            [
                'user_id' => 22,
                'first_name' => 'Facilitador 8',
                'middle_name' => 'Facilitador',
                'last_name' => 'Facilitador',
                'role' => 'Facilitador',
            ],
            [
                'user_id' => 23,
                'first_name' => 'Facilitador 9',
                'middle_name' => 'Facilitador',
                'last_name' => 'Facilitador',
                'role' => 'Facilitador',
            ],
            [
                'user_id' => 24,
                'first_name' => 'Facilitador 10',
                'middle_name' => 'Facilitador',
                'last_name' => 'Facilitador',
                'role' => 'Facilitador',
            ],
            [
                'user_id' => 25,
                'first_name' => 'Checkin 1',
                'middle_name' => 'Checkin',
                'last_name' => 'Checkin',
                'role' => 'Checkin',
            ],
            [
                'user_id' => 26,
                'first_name' => 'Checkin 2',
                'middle_name' => 'Checkin',
                'last_name' => 'Checkin',
                'role' => 'Checkin',
            ],
            [
                'user_id' => 27,
                'first_name' => 'Checkin 3',
                'middle_name' => 'Checkin',
                'last_name' => 'Checkin',
                'role' => 'Checkin',
            ],
            [
                'user_id' => 28,
                'first_name' => 'Checkin 4',
                'middle_name' => 'Checkin',
                'last_name' => 'Checkin',
                'role' => 'Checkin',
            ],
            [
                'user_id' => 29,
                'first_name' => 'Checkin 5',
                'middle_name' => 'Checkin',
                'last_name' => 'Checkin',
                'role' => 'Checkin',
            ],
            [
                'user_id' => 30,
                'first_name' => 'Checkin 6',
                'middle_name' => 'Checkin',
                'last_name' => 'Checkin',
                'role' => 'Checkin',
            ],
            [
                'user_id' => 31,
                'first_name' => 'Checkin 7',
                'middle_name' => 'Checkin',
                'last_name' => 'Checkin',
                'role' => 'Checkin',
            ],
            [
                'user_id' => 32,
                'first_name' => 'Checkin 8',
                'middle_name' => 'Checkin',
                'last_name' => 'Checkin',
                'role' => 'Checkin',
            ],
            [
                'user_id' => 33,
                'first_name' => 'Checkin 9',
                'middle_name' => 'Checkin',
                'last_name' => 'Checkin',
                'role' => 'Checkin',
            ],
            [
                'user_id' => 34,
                'first_name' => 'Checkin 10',
                'middle_name' => 'Checkin',
                'last_name' => 'Checkin',
                'role' => 'Checkin',
            ],
            [
                'user_id' => 35,
                'first_name' => 'Caja 1',
                'middle_name' => 'Caja',
                'last_name' => 'Caja',
                'role' => 'Caja',
            ],
            [
                'user_id' => 36,
                'first_name' => 'Caja 2',
                'middle_name' => 'Caja',
                'last_name' => 'Caja',
                'role' => 'Caja',
            ],
            [
                'user_id' => 37,
                'first_name' => 'Caja 3',
                'middle_name' => 'Caja',
                'last_name' => 'Caja',
                'role' => 'Caja',
            ],
            [
                'user_id' => 38,
                'first_name' => 'Caja 4',
                'middle_name' => 'Caja',
                'last_name' => 'Caja',
                'role' => 'Caja',
            ],
            [
                'user_id' => 39,
                'first_name' => 'Caja 5',
                'middle_name' => 'Caja',
                'last_name' => 'Caja',
                'role' => 'Caja',
            ],
        ];

        DB::table('administrators')->insert($administrators);
    }
}
