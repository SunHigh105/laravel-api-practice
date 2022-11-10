<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_details')->insert(
            [
                [
                    'order_id' => '0000000001',
                    'product_id' => 'p0000000001',
                    'count' => 1
                ],
                [
                    'order_id' => '0000000001',
                    'product_id' => 'p0000000003',
                    'count' => 2
                ],
                [
                    'order_id' => '0000000002',
                    'product_id' => 'p0000000002',
                    'count' => 1
                ],
            ]
        );
    }
}
