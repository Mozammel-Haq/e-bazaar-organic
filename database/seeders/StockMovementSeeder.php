<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockMovementSeeder extends Seeder
{
    public function run(): void
    {
        // Get warehouse, product variant IDs
        $warehouseIds = DB::table('warehouses')->pluck('id')->toArray();
        $variantIds = DB::table('product_variants')->pluck('id')->toArray();

        $movements = [];
        $movementTypes = ['purchase', 'sale', 'adjustment', 'transfer'];
        $referenceTypes = ['purchase', 'order', 'manual', 'transfer'];

        foreach ($variantIds as $index => $variantId) {
            $warehouseId = $warehouseIds[$index % count($warehouseIds)];
            
            // Add initial stock movement
            $movements[] = [
                'product_variant_id' => $variantId,
                'warehouse_id' => $warehouseId,
                'quantity' => rand(50, 200),
                'type' => 'purchase',
                'reference_type' => 'purchase',
                'reference_id' => $index + 1,
                'note' => 'Initial stock purchase',
                'created_at' => now()->subDays(rand(30, 90)),
                'updated_at' => now()->subDays(rand(30, 90)),
            ];
            
            // Add some sales movements
            for ($i = 0; $i < rand(1, 3); $i++) {
                $movements[] = [
                    'product_variant_id' => $variantId,
                    'warehouse_id' => $warehouseId,
                    'quantity' => -rand(1, 10),
                    'type' => 'sale',
                    'reference_type' => 'order',
                    'reference_id' => rand(1, 20),
                    'note' => 'Customer order fulfillment',
                    'created_at' => now()->subDays(rand(1, 29)),
                    'updated_at' => now()->subDays(rand(1, 29)),
                ];
            }
            
            // Add some adjustments
            if (rand(0, 1)) {
                $movements[] = [
                    'product_variant_id' => $variantId,
                    'warehouse_id' => $warehouseId,
                    'quantity' => rand(-5, 10),
                    'type' => 'adjustment',
                    'reference_type' => 'manual',
                    'reference_id' => 1,
                    'note' => 'Inventory adjustment',
                    'created_at' => now()->subDays(rand(1, 15)),
                    'updated_at' => now()->subDays(rand(1, 15)),
                ];
            }
        }

        DB::table('stock_movements')->insert($movements);
    }
}
