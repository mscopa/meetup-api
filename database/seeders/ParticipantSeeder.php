<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $participants = [
            [
                'company_id' => 1,
                'first_name' => 'Lautaro',
                'middle_name' => 'Daniel',
                'last_name' => 'Ochoa',
                'gender' => 'Masculino',
                'dietary_restrictions' => 'no.',
                'medical_conditions' => 'no.',
                'tshirt_size' => 'M',
                'approval_status' => 'Aprobado',
                'attended' => 1,
                'is_member' => 1,
                'kit_delivered' => 1,
            ],
            [
                'company_id' => 3,
                'first_name' => 'Julieta',
                'middle_name' => 'Noemí',
                'last_name' => 'Urriarte',
                'gender' => 'Femenino',
                'dietary_restrictions' => 'no.',
                'medical_conditions' => 'no.',
                'tshirt_size' => 'S',
                'approval_status' => 'Pendiente',
                'attended' => 0,
                'is_member' => 1,
                'kit_delivered' => 1,
            ],
        ];
        DB::table('participants')->insert($participants);
    }
}
