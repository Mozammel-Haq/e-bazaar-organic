<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockSeeder extends Seeder
{
    public function run(): void
    {
        // Get warehouse, product variant IDs
        $warehouseIds = DB::table('warehouses')->pluck('id')->toArray();
        $variantIds = DB::table('product_variants')->pluck('id')->toArray();

        $stocks = [];
        
        foreach ($variantIds as $index => $variantId) {
            // Distribute stock across warehouses
            $warehouseIndex = $index % count($warehouseIds);
            
            $stocks[] = [
                'product_variant_id' => $variantId,
                'warehouse_id' => $warehouseIds[$warehouseIndex],
                'quantity' => rand(50, 500),
                'reserved_quantity' => rand(0, 20),
                'created_at' => now(),
                'updated_at' => now(),
            ];
            
            // Add some products to multiple warehouses
            if ($index < 3 && count($warehouseIds) > 1) {
                $stocks[] = [
                    'product_variant_id' => $variantId,
                    'warehouse_id' => $warehouseIds[($warehouseIndex + 1) % count($warehouseIds)],
                    'quantity' => rand(25, 200),
                    'reserved_quantity' => rand(0, 10),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('stocks')->insert($stocks);
    }
}
