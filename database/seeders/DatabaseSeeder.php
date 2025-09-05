<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MeetupSessionSeeder::class,
            ProductSeeder::class,
            UserSeeder::class,
            AdministratorSeeder::class,
            CompanySeeder::class,
            ParticipantSeeder::class,
            CounselorSeeder::class,
            ActivitySeeder::class,
            ActivityDetailSeeder::class,
            ActivityDetailContentSeeder::class,
            PuzzleSeeder::class,
            CrosswordWordSeeder::class,
            WordSearchWordSeeder::class,
        ]);
    }
}
