<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'user_id' => '000001',
                    'name' => '打三井一郎',
                    'birthday' => '1990-10-01',
                    'phone_number' => '09012345678',
                    'email' => 'dummy1row@example.com',
                    'password' => '1111aaaa'
                ],
                [
                    'user_id' => '000002',
                    'name' => '打三井二郎',
                    'birthday' => '1990-10-02',
                    'phone_number' => '09022345678',
                    'email' => 'dummy2row@example.com',
                    'password' => '2222bbbb'
                ]
            ]
        );
    }
}
