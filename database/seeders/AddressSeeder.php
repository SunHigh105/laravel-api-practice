<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert(
            [
                'address_id' => 'ad000001-001',
                'user_id' => '000001',
                'post_code' => '123-4567',
                'address' => '東京都架空区幻想町１２−３'
            ],
            [
                'address_id' => 'ad000001-002',
                'user_id' => '000001',
                'post_code' => '123-4567',
                'address' => '東京都架空区幻想町３４−５'
            ],
            [
                'address_id' => 'ad000002-001',
                'user_id' => '000002',
                'post_code' => '223-4567',
                'address' => '神奈川県架空区幻想町１２−３'
            ]
        );
    }
}
