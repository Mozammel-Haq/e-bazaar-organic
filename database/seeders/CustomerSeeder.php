<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'user_id' => 1,
                'first_name' => 'John',
                'last_name' => 'Doe',
                'phone' => '1234567890',
                'gender' => 'male',
                'date_of_birth' => '1990-01-01',
            ],
        ]);
        DB::table('customer_addresses')->insert([
            [
                // address line 1, address line 2, city,zip,is_default
                'customer_id' => 1,
                'address_type' => 'home',
                'address_line_1' => '123 Main St',
                'address_line_2' => '',
                'city' => 'City',
                'zip' => '12345',
                'is_default' => true,
            ],
        ]);
    }
}
