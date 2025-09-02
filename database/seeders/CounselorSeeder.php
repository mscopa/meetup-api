<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CounselorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $counselors = [
            [
                'company_id' => 1,
                'first_name' => 'Benjamin',
                'middle_name' => 'Alejo',
                'last_name' => 'Suárez',
                'pin' => 'Benja1',
                'type' => 'Consejero',
                'gender' => 'Masculino',
                'dietary_restrictions' => 'no.',
                'medical_conditions' => 'no.',
                'tshirt_size' => 'M',
                'approval_status' => 'Aprobado',
                'attended' => 1,
                'checkin' => 1
            ],
            [
                'company_id' => 2,
                'first_name' => 'Sandra',
                'middle_name' => '',
                'last_name' => 'Pacheco',
                'pin' => 'Sandra1',
                'type' => 'Consejero',
                'gender' => 'Femenino',
                'dietary_restrictions' => 'no.',
                'medical_conditions' => 'no.',
                'tshirt_size' => 'M',
                'approval_status' => 'Aprobado',
                'attended' => 1,
                'checkin' => 1
            ],
        ];
        DB::table('counselors')->insert($counselors);
    }
}
