<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            [
                'meetup_session_id' => 1,
                'username' => 'Comp1',
                'password' => bcrypt('Cccomp1!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Comp2',
                'password' => bcrypt('Cccomp2!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Comp3',
                'password' => bcrypt('Cccomp3!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Comp4',
                'password' => bcrypt('Cccomp4!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Comp5',
                'password' => bcrypt('Cccomp5!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Comp6',
                'password' => bcrypt('Cccomp6!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Comp7',
                'password' => bcrypt('Cccomp7!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Comp8',
                'password' => bcrypt('Cccomp8!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Comp9',
                'password' => bcrypt('Cccomp9!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Comp10',
                'password' => bcrypt('Cccomp10!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Comp11',
                'password' => bcrypt('Cccomp11!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Comp12',
                'password' => bcrypt('Cccomp12!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'admin',
                'password' => bcrypt('CubicAR1225'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Mdirector',
                'password' => bcrypt('Admdirectoruser1'),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
