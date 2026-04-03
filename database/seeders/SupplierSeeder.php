<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('suppliers')->insert([
            [
                'name' => 'Global Foods Inc.',
                'email' => 'contact@globalfoods.com',
                'phone' => '+1-555-1001',
                'address' => '123 Supplier Way, Miami, FL 33101',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fresh Produce Direct',
                'email' => 'orders@freshproducedirect.com',
                'phone' => '+1-555-1002',
                'address' => '456 Farm Road, Fresno, CA 93701',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ocean Seafood Suppliers',
                'email' => 'info@oceanseafood.com',
                'phone' => '+1-555-1003',
                'address' => '789 Harbor Drive, Seattle, WA 98101',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dairy Partners Ltd.',
                'email' => 'sales@dairypartners.com',
                'phone' => '+1-555-1004',
                'address' => '321 Milk Street, Madison, WI 53701',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Organic Farms Cooperative',
                'email' => 'hello@organicfarms.coop',
                'phone' => '+1-555-1005',
                'address' => '654 Country Lane, Burlington, VT 05401',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
