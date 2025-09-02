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
                'email' => 'company1@gmail.com',
                'email_verified_at' => now(),
                'username' => 'company1',
                'password' => bcrypt('password1'),
                'role' => 'company',
            ],
            [
                'meetup_session_id' => 1,
                'email' => 'company2@gmail.com',
                'email_verified_at' => null,
                'username' => 'company2',
                'password' => bcrypt('password2'),
                'role' => 'company',
            ],
            [
                'meetup_session_id' => 1,
                'email' => 'company3@gmail.com',
                'email_verified_at' => null,
                'username' => 'company3',
                'password' => bcrypt('password3'),
                'role' => 'company',
            ],
            [
                'meetup_session_id' => 1,
                'email' => 'company4@gmail.com',
                'email_verified_at' => null,
                'username' => 'company4',
                'password' => bcrypt('password4'),
                'role' => 'company',
            ],
            [
                'meetup_session_id' => 1,
                'email' => 'company5@gmail.com',
                'email_verified_at' => null,
                'username' => 'company5',
                'password' => bcrypt('password5'),
                'role' => 'company',
            ],
            [
                'meetup_session_id' => 1,
                'email' => 'company6@gmail.com',
                'email_verified_at' => null,
                'username' => 'company6',
                'password' => bcrypt('password6'),
                'role' => 'company',
            ],
            [
                'meetup_session_id' => 1,
                'email' => 'company7@gmail.com',
                'email_verified_at' => null,
                'username' => 'company7',
                'password' => bcrypt('password7'),
                'role' => 'company',
            ],
            [
                'meetup_session_id' => 1,
                'email' => 'company8@gmail.com',
                'email_verified_at' => null,
                'username' => 'company8',
                'password' => bcrypt('password8'),
                'role' => 'company',
            ],
            [
                'meetup_session_id' => 1,
                'email' => 'company9@gmail.com',
                'email_verified_at' => null,
                'username' => 'company9',
                'password' => bcrypt('password9'),
                'role' => 'company',
            ],
            [
                'meetup_session_id' => 1,
                'email' => 'company10@gmail.com',
                'email_verified_at' => null,
                'username' => 'company10',
                'password' => bcrypt('password10'),
                'role' => 'company',
            ],
            [
                'meetup_session_id' => 1,
                'email' => 'company11@gmail.com',
                'email_verified_at' => null,
                'username' => 'company11',
                'password' => bcrypt('password11'),
                'role' => 'company',
            ],
            [
                'meetup_session_id' => 1,
                'email' => 'company12@gmail.com',
                'email_verified_at' => null,
                'username' => 'company12',
                'password' => bcrypt('password12'),
                'role' => 'company',
            ],
            [
                'meetup_session_id' => 1,
                'email' => 'admin@gmail.com',
                'email_verified_at' => null,
                'username' => 'admin',
                'password' => bcrypt('admin1234'),
                'role' => 'admin',
            ],
            [
                'meetup_session_id' => 1,
                'email' => 'directormarriage@gmail.com',
                'email_verified_at' => null,
                'username' => 'directorMarriage',
                'password' => bcrypt('marriage1'),
                'role' => 'directorMarriage',
            ],
        ];

        DB::table('users')->insert($users);
    }
}
