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
                'password' => bcrypt('company'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'company2',
                'password' => bcrypt('company'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'company3',
                'password' => bcrypt('company'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'checkin',
                'password' => bcrypt('checkin'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'cashier',
                'password' => bcrypt('cashier'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'facilitator',
                'password' => bcrypt('facilitator'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'director',
                'password' => bcrypt('director'),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
