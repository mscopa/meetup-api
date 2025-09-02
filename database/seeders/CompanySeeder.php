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
                'room' => 'Salón Cultural',
            ],
            [
                'user_id' => 2,
                'name' => 'Los Valientes de Judá',
                'number' => 2,
                'war_cry' => '¡Con valor y honor!',
                'score' => 0,
                'coins' => 0,
                'room' => 'Primaria',
            ],
            [
                'user_id' => 3,
                'name' => 'Los Sabios de Salomón',
                'number' => 3,
                'war_cry' => '¡Con sabiduría y fuerza!',
                'score' => 0,
                'coins' => 0,
                'room' => 'Sociedad de Socorro',
            ],
            [
                'user_id' => 4,
                'name' => 'Los Guerreros de David',
                'number' => 4,
                'war_cry' => '¡Con coraje y fe!',
                'score' => 0,
                'coins' => 0,
                'room' => 'Obispado',
            ],
            [
                'user_id' => 5,
                'name' => 'Los Justos de Rut',
                'number' => 5,
                'war_cry' => '¡Con justicia y amor!',
                'score' => 0,
                'coins' => 0,
                'room' => 'Guardería',
            ],
            [
                'user_id' => 6,
                'name' => 'Los Fieles de Ester',
                'number' => 6,
                'war_cry' => '¡Con fe y valentía!',
                'score' => 0,
                'coins' => 0,
                'room' => 'Hombres Jóvenes',
            ],
            [
                'user_id' => 7,
                'name' => 'Los Pioneros de Abraham',
                'number' => 7,
                'war_cry' => '¡Con visión y fe!',
                'score' => 0,
                'coins' => 0,
                'room' => 'Mujeres Jóvenes',
            ],
            [
                'user_id' => 8,
                'name' => 'Los Redimidos de Moisés',
                'number' => 8,
                'war_cry' => '¡Con libertad y fe!',
                'score' => 0,
                'coins' => 0,
                'room' => 'Salón Cultural',
            ],
            [
                'user_id' => 9,
                'name' => 'Los Profetas de Elías',
                'number' => 9,
                'war_cry' => '¡Con poder y fe!',
                'score' => 0,
                'coins' => 0,
                'room' => 'Primaria',
            ],
            [
                'user_id' => 10,
                'name' => 'Los Constructores de Noé',
                'number' => 10,
                'war_cry' => '¡Con esperanza y fe!',
                'score' => 0,
                'coins' => 0,
                'room' => 'Sociedad de Socorro',
            ],
            [
                'user_id' => 11,
                'name' => 'Los Mensajeros de Isaías',
                'number' => 11,
                'war_cry' => '¡Con verdad y fe!',
                'score' => 0,
                'coins' => 0,
                'room' => 'Obispado',
            ],
            [
                'user_id' => 12,
                'name' => 'Los Siervos de Josué',
                'number' => 12,
                'war_cry' => '¡Con obediencia y fe!',
                'score' => 0,
                'coins' => 0,
                'room' => 'Guardería',
            ],
        ];
        DB::table('companies')->insert($companies);
    }
}
