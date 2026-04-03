<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('discounts')->insert([
            [
                'name' => 'Summer Sale 2024',
                'type' => 'percentage',
                'value' => 15.00,
                'start_date' => now()->subDays(10),
                'end_date' => now()->addDays(20),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fresh Produce Discount',
                'type' => 'percentage',
                'value' => 10.00,
                'start_date' => now()->subDays(5),
                'end_date' => now()->addDays(25),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bulk Purchase Special',
                'type' => 'fixed',
                'value' => 25.00,
                'start_date' => now()->subDays(15),
                'end_date' => now()->addDays(15),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Weekend Flash Sale',
                'type' => 'percentage',
                'value' => 20.00,
                'start_date' => now()->addDays(2),
                'end_date' => now()->addDays(4),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Loyalty Reward',
                'type' => 'percentage',
                'value' => 5.00,
                'start_date' => now()->subDays(30),
                'end_date' => now()->addDays(60),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Get discount IDs, product IDs, and category IDs for conditions
        $discountIds = DB::table('discounts')->pluck('id')->toArray();
        $productIds = DB::table('products')->pluck('id')->toArray();
        $categoryIds = DB::table('categories')->pluck('id')->toArray();

        $conditions = [
            // Minimum order amount conditions
            [
                'discount_id' => $discountIds[0] ?? 1,
                'min_order_amount' => 100.00,
                'product_id' => null,
                'category_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'discount_id' => $discountIds[2] ?? 3,
                'min_order_amount' => 200.00,
                'product_id' => null,
                'category_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Category-specific conditions
            [
                'discount_id' => $discountIds[1] ?? 2,
                'min_order_amount' => 0.00,
                'product_id' => null,
                'category_id' => $categoryIds[2] ?? 3, // Fresh Meat category
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'discount_id' => $discountIds[1] ?? 2,
                'min_order_amount' => 0.00,
                'product_id' => null,
                'category_id' => $categoryIds[3] ?? 4, // Vegetables category
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Product-specific conditions
            [
                'discount_id' => $discountIds[4] ?? 5,
                'min_order_amount' => 0.00,
                'product_id' => $productIds[0] ?? 1,
                'category_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('discount_conditions')->insert($conditions);

        // Create coupons
        $coupons = [
            [
                'code' => 'SUMMER2024',
                'discount_id' => $discountIds[0] ?? 1,
                'usage_limit' => 100,
                'used_count' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'FRESH10',
                'discount_id' => $discountIds[1] ?? 2,
                'usage_limit' => 50,
                'used_count' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'BULK25',
                'discount_id' => $discountIds[2] ?? 3,
                'usage_limit' => 25,
                'used_count' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'WEEKEND20',
                'discount_id' => $discountIds[3] ?? 4,
                'usage_limit' => 75,
                'used_count' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'LOYALTY5',
                'discount_id' => $discountIds[4] ?? 5,
                'usage_limit' => 200,
                'used_count' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('coupons')->insert($coupons);
    }
}
