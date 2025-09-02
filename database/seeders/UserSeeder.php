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
                'username' => 'company1',
                'password' => bcrypt('password1'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'company2',
                'password' => bcrypt('password2'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'company3',
                'password' => bcrypt('password3'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'company4',
                'password' => bcrypt('password4'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'company5',
                'password' => bcrypt('password5'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'company6',
                'password' => bcrypt('password6'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'company7',
                'password' => bcrypt('password7'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'company8',
                'password' => bcrypt('password8'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'company9',
                'password' => bcrypt('password9'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'company10',
                'password' => bcrypt('password10'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'company11',
                'password' => bcrypt('password11'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'company12',
                'password' => bcrypt('password12'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'admin',
                'password' => bcrypt('admin1234'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'directorMarriage',
                'password' => bcrypt('marriage1'),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
