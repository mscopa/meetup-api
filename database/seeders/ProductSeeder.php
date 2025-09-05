<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'meetup_session_id' => 1,
                'name' => 'Lays',
                'description' => '100g',
                'stock' => 50,
                'price' => 3,
                'is_active' => true,
            ],
            [
                'meetup_session_id' => 1,
                'name' => 'Doritos',
                'description' => '86g',
                'stock' => 100,
                'price' => 5,
                'is_active' => true,
            ],
            [
                'meetup_session_id' => 1,
                'name' => 'Coca Cola',
                'description' => '1lt',
                'stock' => 50,
                'price' => 2,
                'is_active' => true,
            ],
            [
                'meetup_session_id' => 1,
                'name' => 'Pepsi',
                'description' => '600ml',
                'stock' => 50,
                'price' => 1,
                'is_active' => true,
            ],
            [
                'meetup_session_id' => 1,
                'name' => 'Don Satur',
                'description' => '136g',
                'stock' => 50,
                'price' => 4,
                'is_active' => true,
            ],
        ];

        DB::table('products')->insert($products);
    }
}
