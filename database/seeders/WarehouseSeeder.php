<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehouseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('warehouses')->insert([
            [
                'name' => 'Main Warehouse',
                'address' => '123 Industrial Drive, New York, NY 10001',
                'phone' => '+1-555-0101',
                'email' => 'main@ecomwarehouse.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'West Coast Distribution Center',
                'address' => '456 Commerce Blvd, Los Angeles, CA 90001',
                'phone' => '+1-555-0102',
                'email' => 'west@ecomwarehouse.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Central Hub',
                'address' => '789 Logistics Park, Chicago, IL 60601',
                'phone' => '+1-555-0103',
                'email' => 'central@ecomwarehouse.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
