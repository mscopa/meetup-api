<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivityDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $activityDetails = [
            [
                'activity_id' => 2,
                'detail_type' => 'Dinámica de Agrupación',
            ],
            [
                'activity_id' => 2,
                'detail_type' => 'Nota',
            ],
            [
                'activity_id' => 3,
                'detail_type' => 'Objetivo',
            ],
            [
                'activity_id' => 3,
                'detail_type' => 'Materiales Necesarios (Por compañía)',
            ],
            [
                'activity_id' => 3,
                'detail_type' => 'Formación de Compañías',
            ],
            [
                'activity_id' => 3,
                'detail_type' => 'Preparación Previa',
            ],
            [
                'activity_id' => 3,
                'detail_type' => 'Instrucciones',
            ],
            [
                'activity_id' => 3,
                'detail_type' => 'Reglas y Sugerencias',
            ],
            [
                'activity_id' => 3,
                'detail_type' => 'Fin de la actividad',
            ],
            [
                'activity_id' => 3,
                'detail_type' => 'Nota',
            ],
            [
                'activity_id' => 5,
                'detail_type' => 'Objetivo',
            ],
            [
                'activity_id' => 5,
                'detail_type' => 'Materiales Necesarios (Por cada 2 compañías)',
            ],
            [
                'activity_id' => 5,
                'detail_type' => 'Nota',
            ],
            [
                'activity_id' => 5,
                'detail_type' => 'Formación de Compañías',
            ],
            [
                'activity_id' => 5,
                'detail_type' => 'Preparación Previa',
            ],
            [
                'activity_id' => 5,
                'detail_type' => 'Instrucciones',
            ],
            [
                'activity_id' => 5,
                'detail_type' => 'Reglas y Sugerencias',
            ],
            [
                'activity_id' => 5,
                'detail_type' => 'Fin de la actividad',
            ],
            [
                'activity_id' => 6,
                'detail_type' => 'Objetivo',
            ],
            [
                'activity_id' => 6,
                'detail_type' => 'Materiales Necesarios (Por compañía)',
            ],
            [
                'activity_id' => 6,
                'detail_type' => 'Nota',
            ],
            [
                'activity_id' => 6,
                'detail_type' => 'Formación de Compañías',
            ],
            [
                'activity_id' => 6,
                'detail_type' => 'Instrucciones',
            ],
            [
                'activity_id' => 6,
                'detail_type' => 'Reglas y Sugerencias',
            ],
            [
                'activity_id' => 6,
                'detail_type' => 'Fin de la actividad',
            ],
            [
                'activity_id' => 7,
                'detail_type' => 'Objetivo',
            ],
            [
                'activity_id' => 7,
                'detail_type' => 'Materiales Necesarios (Por compañía)',
            ],
            [
                'activity_id' => 7,
                'detail_type' => 'Nota',
            ],
            [
                'activity_id' => 7,
                'detail_type' => 'Instrucciones',
            ],
            [
                'activity_id' => 7,
                'detail_type' => 'Reglas y Sugerencias',
            ],
            [
                'activity_id' => 7,
                'detail_type' => 'Fin de la actividad',
            ],
            [
                'activity_id' => 9,
                'detail_type' => 'Objetivo',
            ],
            [
                'activity_id' => 9,
                'detail_type' => 'Materiales Necesarios (Por compañía)',
            ],
            [
                'activity_id' => 9,
                'detail_type' => 'Nota',
            ],
            [
                'activity_id' => 9,
                'detail_type' => 'Instrucciones',
            ],
            [
                'activity_id' => 9,
                'detail_type' => 'Reglas y Sugerencias',
            ],
            [
                'activity_id' => 9,
                'detail_type' => 'Fin de la actividad',
            ],
            [
                'activity_id' => 10,
                'detail_type' => 'Objetivo',
            ],
            [
                'activity_id' => 10,
                'detail_type' => 'Materiales Necesarios',
            ],
            [
                'activity_id' => 10,
                'detail_type' => 'Nota',
            ],
            [
                'activity_id' => 10,
                'detail_type' => 'Preparación Previa',
            ],
            [
                'activity_id' => 10,
                'detail_type' => 'Instrucciones',
            ],
            [
                'activity_id' => 10,
                'detail_type' => 'Reglas y Sugerencias',
            ],
            [
                'activity_id' => 11,
                'detail_type' => 'Objetivo',
            ],
            [
                'activity_id' => 11,
                'detail_type' => 'Materiales Necesarios',
            ],
            [
                'activity_id' => 11,
                'detail_type' => 'Instrucciones',
            ],
            [
                'activity_id' => 13,
                'detail_type' => 'Objetivo',
            ],
            [
                'activity_id' => 13,
                'detail_type' => 'Convocatoria',
            ],
            [
                'activity_id' => 13,
                'detail_type' => 'Nota',
            ],
            [
                'activity_id' => 14,
                'detail_type' => 'Objetivo',
            ],
            [
                'activity_id' => 14,
                'detail_type' => 'Materiales Necesarios',
            ],
            [
                'activity_id' => 14,
                'detail_type' => 'Preparación Previa',
            ],
            [
                'activity_id' => 14,
                'detail_type' => 'Instrucciones',
            ],
            [
                'activity_id' => 14,
                'detail_type' => 'Mensaje Espiritual Sugerido',
            ],
            [
                'activity_id' => 14,
                'detail_type' => 'Programa Sugerido',
            ],
        ];

        DB::table('activity_details')->insert($activityDetails);
    }
}
