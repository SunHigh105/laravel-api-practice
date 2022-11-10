<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                [
                    'product_id' => 'p0000000001',
                    'name' => 'iPhone 13',
                    'description' => '128GB SIM Free',
                    'distributer' => 'Apple',
                    'price' => 90000
                ],
                [
                    'product_id' => 'p0000000002',
                    'name' => 'Google Pixel',
                    'description' => '64GB SIM Free',
                    'distributer' => 'Google',
                    'price' => 70000
                ],
                [
                    'product_id' => 'p0000000003',
                    'name' => 'Type-C converter',
                    'description' => 'USB convert to Type-C',
                    'distributer' => 'Amazon',
                    'price' => 3000
                ],
            ]
        );
    }
}
