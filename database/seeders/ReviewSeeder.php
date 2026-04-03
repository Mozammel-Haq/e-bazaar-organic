<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        // Get product IDs and customer IDs
        $productIds = DB::table('products')->pluck('id')->toArray();
        $customerIds = DB::table('customers')->pluck('id')->toArray();

        $reviews = [
            [
                'product_id' => $productIds[0] ?? 1,
                'customer_id' => $customerIds[0] ?? 1,
                'rating' => 5,
                'comment' => 'Excellent quality! Very fresh and delicious. Will definitely order again.',
                'status' => 'approved',
                'created_at' => now()->subDays(15),
                'updated_at' => now()->subDays(14),
            ],
            [
                'product_id' => $productIds[1] ?? 2,
                'customer_id' => $customerIds[1] ?? 2,
                'rating' => 4,
                'comment' => 'Good product, fresh and well-packaged. Delivery was on time.',
                'status' => 'approved',
                'created_at' => now()->subDays(12),
                'updated_at' => now()->subDays(11),
            ],
            [
                'product_id' => $productIds[2] ?? 3,
                'customer_id' => $customerIds[2] ?? 3,
                'rating' => 5,
                'comment' => 'Amazing quality! Exceeded my expectations. Highly recommended.',
                'status' => 'approved',
                'created_at' => now()->subDays(8),
                'updated_at' => now()->subDays(7),
            ],
            [
                'product_id' => $productIds[3] ?? 4,
                'customer_id' => $customerIds[3] ?? 4,
                'rating' => 3,
                'comment' => 'Product is okay, but could be fresher. Packaging was good though.',
                'status' => 'approved',
                'created_at' => now()->subDays(6),
                'updated_at' => now()->subDays(5),
            ],
            [
                'product_id' => $productIds[4] ?? 5,
                'customer_id' => $customerIds[4] ?? 5,
                'rating' => 4,
                'comment' => 'Very satisfied with the quality. Good value for money.',
                'status' => 'approved',
                'created_at' => now()->subDays(4),
                'updated_at' => now()->subDays(3),
            ],
            [
                'product_id' => $productIds[0] ?? 1,
                'customer_id' => $customerIds[2] ?? 3,
                'rating' => 5,
                'comment' => 'Consistently high quality. My family loves it!',
                'status' => 'approved',
                'created_at' => now()->subDays(3),
                'updated_at' => now()->subDays(2),
            ],
            [
                'product_id' => $productIds[1] ?? 2,
                'customer_id' => $customerIds[0] ?? 1,
                'rating' => 4,
                'comment' => 'Good product, would order again. Fast delivery.',
                'status' => 'pending',
                'created_at' => now()->subDays(2),
                'updated_at' => now()->subDays(2),
            ],
            [
                'product_id' => $productIds[2] ?? 3,
                'customer_id' => $customerIds[1] ?? 2,
                'rating' => 2,
                'comment' => 'Not as fresh as expected. Disappointed with this order.',
                'status' => 'rejected',
                'created_at' => now()->subDays(1),
                'updated_at' => now()->subDays(1),
            ],
            [
                'product_id' => $productIds[5] ?? 6,
                'customer_id' => $customerIds[3] ?? 4,
                'rating' => 5,
                'comment' => 'Outstanding quality! Will definitely become a regular customer.',
                'status' => 'approved',
                'created_at' => now()->subHours(12),
                'updated_at' => now()->subHours(6),
            ],
            [
                'product_id' => $productIds[6] ?? 7,
                'customer_id' => $customerIds[4] ?? 5,
                'rating' => 4,
                'comment' => 'Very good product. Fresh and well-packaged. Recommended!',
                'status' => 'pending',
                'created_at' => now()->subHours(6),
                'updated_at' => now()->subHours(6),
            ],
        ];

        DB::table('reviews')->insert($reviews);
    }
}
