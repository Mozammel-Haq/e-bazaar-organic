<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchaseSeeder extends Seeder
{
    public function run(): void
    {
        // Get supplier IDs
        $supplierIds = DB::table('suppliers')->pluck('id')->toArray();

        $purchases = [
            [
                'supplier_id' => $supplierIds[0] ?? 1, // Global Foods Inc.
                'total_cost' => 2500.00,
                'status' => 'completed',
                'purchased_at' => now()->subDays(45),
                'created_at' => now()->subDays(45),
                'updated_at' => now()->subDays(45),
            ],
            [
                'supplier_id' => $supplierIds[1] ?? 2, // Fresh Produce Direct
                'total_cost' => 1800.50,
                'status' => 'completed',
                'purchased_at' => now()->subDays(30),
                'created_at' => now()->subDays(30),
                'updated_at' => now()->subDays(30),
            ],
            [
                'supplier_id' => $supplierIds[2] ?? 3, // Ocean Seafood Suppliers
                'total_cost' => 3200.75,
                'status' => 'processing',
                'purchased_at' => now()->subDays(15),
                'created_at' => now()->subDays(15),
                'updated_at' => now()->subDays(15),
            ],
            [
                'supplier_id' => $supplierIds[3] ?? 4, // Dairy Partners Ltd.
                'total_cost' => 1500.25,
                'status' => 'completed',
                'purchased_at' => now()->subDays(60),
                'created_at' => now()->subDays(60),
                'updated_at' => now()->subDays(60),
            ],
            [
                'supplier_id' => $supplierIds[4] ?? 5, // Organic Farms Cooperative
                'total_cost' => 2100.00,
                'status' => 'pending',
                'purchased_at' => now()->subDays(5),
                'created_at' => now()->subDays(5),
                'updated_at' => now()->subDays(5),
            ],
        ];

        DB::table('purchases')->insert($purchases);

        // Get purchase IDs and product variant IDs for purchase items
        $purchaseIds = DB::table('purchases')->pluck('id')->toArray();
        $variantIds = DB::table('product_variants')->pluck('id')->toArray();

        $purchaseItems = [];
        foreach ($purchaseIds as $purchaseIndex => $purchaseId) {
            // Add 2-4 items per purchase
            $itemsCount = rand(2, 4);
            for ($i = 0; $i < $itemsCount; $i++) {
                $variantIndex = ($purchaseIndex * 4 + $i) % count($variantIds);
                $quantity = rand(10, 100);
                $purchasePrice = rand(50, 500) + (rand(0, 99) / 100);
                
                $purchaseItems[] = [
                    'purchase_id' => $purchaseId,
                    'product_variant_id' => $variantIds[$variantIndex],
                    'quantity' => $quantity,
                    'purchase_price' => $purchasePrice,
                    'total' => $quantity * $purchasePrice,
                    'created_at' => now()->subDays(rand(5, 60)),
                    'updated_at' => now()->subDays(rand(5, 60)),
                ];
            }
        }

        DB::table('purchase_items')->insert($purchaseItems);
    }
}
