<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert(
            [
                [
                    'order_id' => '0000000001',
                    'user_id' => '000001',
                    'address_id' => 'ad000001-001',
                    'delivery_charge' => 500,
                    'fee' => 250,
                    'discount' => 300,
                    'order_date' => '2022-11-09',
                    'arrival_date' => '2022-11-13',
                    'status' => '1',
                ],
                [
                    'order_id' => '0000000002',
                    'user_id' => '000002',
                    'address_id' => 'ad000002-001',
                    'delivery_charge' => 0,
                    'fee' => 0,
                    'discount' => 0,
                    'order_date' => '2022-11-09',
                    'arrival_date' => '2022-11-13',
                    'status' => '2',
                ]
            ]
        );
    }
}
