<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerAddressSeeder extends Seeder
{
    public function run(): void
    {
        // Get customer IDs
        $customerIds = DB::table('customers')->pluck('id')->toArray();

        $addresses = [
            // John Doe's addresses
            [
                'customer_id' => $customerIds[0] ?? 1,
                'address_type' => 'home',
                'address_line_1' => '123 Main Street',
                'address_line_2' => 'Apt 4B',
                'city' => 'New York',
                'zip' => '10001',
                'is_default' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => $customerIds[0] ?? 1,
                'address_type' => 'work',
                'address_line_1' => '456 Business Ave',
                'address_line_2' => 'Suite 200',
                'city' => 'New York',
                'zip' => '10002',
                'is_default' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Jane Smith's addresses
            [
                'customer_id' => $customerIds[1] ?? 2,
                'address_type' => 'home',
                'address_line_1' => '789 Oak Avenue',
                'address_line_2' => '',
                'city' => 'Los Angeles',
                'zip' => '90001',
                'is_default' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Robert Johnson's addresses
            [
                'customer_id' => $customerIds[2] ?? 3,
                'address_type' => 'home',
                'address_line_1' => '321 Pine Street',
                'address_line_2' => '',
                'city' => 'Chicago',
                'zip' => '60601',
                'is_default' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => $customerIds[2] ?? 3,
                'address_type' => 'work',
                'address_line_1' => '654 Corporate Blvd',
                'address_line_2' => 'Floor 15',
                'city' => 'Chicago',
                'zip' => '60602',
                'is_default' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Emily Davis's addresses
            [
                'customer_id' => $customerIds[3] ?? 4,
                'address_type' => 'home',
                'address_line_1' => '987 Elm Road',
                'address_line_2' => '',
                'city' => 'Houston',
                'zip' => '77001',
                'is_default' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Michael Wilson's addresses
            [
                'customer_id' => $customerIds[4] ?? 5,
                'address_type' => 'home',
                'address_line_1' => '246 Maple Drive',
                'address_line_2' => '',
                'city' => 'Phoenix',
                'zip' => '85001',
                'is_default' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('customer_addresses')->insert($addresses);
    }
}
