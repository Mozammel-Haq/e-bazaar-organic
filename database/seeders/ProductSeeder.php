<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            'name' => 'Brand 1',
            'slug' => 'brand-1',
        ]);
        DB::table('units')->insert([
            'name' => 'Kilogram',
            'symbol' => 'kg',
        ]);
        DB::table("products")->insert([
            // columns: name,slug,description,brand_id,unit_id,category_id,is_active,is_featured (8 prouducts)
            [
                'name' => 'Product 1',
                'slug' => 'product-1',
                'description' => 'Product 1 description',
                'brand_id' => 1,
                'unit_id' => 1,
                'category_id' => 1,
                'is_active' => 1,
                'is_featured' => 1,
            ],
            [
                'name' => 'Product 2',
                'slug' => 'product-2',
                'description' => 'Product 2 description',
                'brand_id' => 1,
                'unit_id' => 1,
                'category_id' => 1,
                'is_active' => 1,
                'is_featured' => 1,
            ],
            [
                'name' => 'Product 3',
                'slug' => 'product-3',
                'description' => 'Product 3 description',
                'brand_id' => 1,
                'unit_id' => 1,
                'category_id' => 2,
                'is_active' => 1,
                'is_featured' => 1,
            ],
            [
                'name' => 'Product 4',
                'slug' => 'product-4',
                'description' => 'Product 4 description',
                'brand_id' => 1,
                'unit_id' => 1,
                'category_id' => 2,
                'is_active' => 1,
                'is_featured' => 1,
            ],
            [
                'name' => 'Product 5',
                'slug' => 'product-5',
                'description' => 'Product 5 description',
                'brand_id' => 1,
                'unit_id' => 1,
                'category_id' => 3,
                'is_active' => 1,
                'is_featured' => 1,
            ],
            [
                'name' => 'Product 6',
                'slug' => 'product-6',
                'description' => 'Product 6 description',
                'brand_id' => 1,
                'unit_id' => 1,
                'category_id' => 3,
                'is_active' => 1,
                'is_featured' => 1,
            ],
            [
                'name' => 'Product 7',
                'slug' => 'product-7',
                'description' => 'Product 7 description',
                'brand_id' => 1,
                'unit_id' => 1,
                'category_id' => 5,
                'is_active' => 1,
                'is_featured' => 1,
            ],
            [
                'name' => 'Product 8',
                'slug' => 'product-8',
                'description' => 'Product 8 description',
                'brand_id' => 1,
                'unit_id' => 1,
                'category_id' => 1,
                'is_active' => 1,
                'is_featured' => 1,
            ],
        ]);

        DB::table('product_variants')->insert([
            // product_id, sku, price, barcode, purchase_price, weight, is_default, is_active (Add for 8 products)
            [
                'product_id' => 1,
                'sku' => 'sku-1',
                'price' => 100,
                'barcode' => 'barcode-1',
                'purchase_price' => 50,
                'weight' => 1,
                'is_default' => 1,
                'is_active' => 1,
            ],
            [
                'product_id' => 2,
                'sku' => 'sku-2',
                'price' => 200,
                'barcode' => 'barcode-2',
                'purchase_price' => 100,
                'weight' => 2,
                'is_default' => 1,
                'is_active' => 1,
            ],
            [
                'product_id' => 3,
                'sku' => 'sku-3',
                'price' => 300,
                'barcode' => 'barcode-3',
                'purchase_price' => 150,
                'weight' => 3,
                'is_default' => 1,
                'is_active' => 1,
            ],
            [
                'product_id' => 4,
                'sku' => 'sku-4',
                'price' => 400,
                'barcode' => 'barcode-4',
                'purchase_price' => 200,
                'weight' => 4,
                'is_default' => 1,
                'is_active' => 1,
            ],
            [
                'product_id' => 5,
                'sku' => 'sku-5',
                'price' => 500,
                'barcode' => 'barcode-5',
                'purchase_price' => 250,
                'weight' => 5,
                'is_default' => 1,
                'is_active' => 1,
            ],
            [
                'product_id' => 6,
                'sku' => 'sku-6',
                'price' => 600,
                'barcode' => 'barcode-6',
                'purchase_price' => 300,
                'weight' => 6,
                'is_default' => 1,
                'is_active' => 1,
            ],
            [
                'product_id' => 7,
                'sku' => 'sku-7',
                'price' => 700,
                'barcode' => 'barcode-7',
                'purchase_price' => 350,
                'weight' => 7,
                'is_default' => 1,
                'is_active' => 1,
            ],
            [
                'product_id' => 8,
                'sku' => 'sku-8',
                'price' => 800,
                'barcode' => 'barcode-8',
                'purchase_price' => 400,
                'weight' => 8,
                'is_default' => 1,
                'is_active' => 1,
            ]
        ]);

        DB::table('product_images')->insert([
            // product_id,variant_id,image_path,alt_text,is_primary,sort_order (Add for 8 products)
            [
                'product_id' => 1,
                'variant_id' => 1,
                'image_path' => 'img/featured/feature-1.jpg',
                'alt_text' => 'Feature Image 1',
                'is_primary' => 1,
                'sort_order' => 1,
            ],
            [
                'product_id' => 2,
                'variant_id' => 1,
                'image_path' => 'img/featured/feature-2.jpg',
                'alt_text' => 'Feature Image 2',
                'is_primary' => 1,
                'sort_order' => 1,
            ],
            [
                'product_id' => 3,
                'variant_id' => 1,
                'image_path' => 'img/featured/feature-3.jpg',
                'alt_text' => 'Feature Image 3',
                'is_primary' => 1,
                'sort_order' => 1,
            ],
            [
                'product_id' => 4,
                'variant_id' => 1,
                'image_path' => 'img/featured/feature-4.jpg',
                'alt_text' => 'Feature Image 4',
                'is_primary' => 1,
                'sort_order' => 1,
            ],
            [
                'product_id' => 5,
                'variant_id' => 1,
                'image_path' => 'img/featured/feature-5.jpg',
                'alt_text' => 'Feature Image 5',
                'is_primary' => 1,
                'sort_order' => 1,
            ],
            [
                'product_id' => 6,
                'variant_id' => 1,
                'image_path' => 'img/featured/feature-6.jpg',
                'alt_text' => 'Feature Image 6',
                'is_primary' => 1,
                'sort_order' => 1,
            ],
            [
                'product_id' => 7,
                'variant_id' => 1,
                'image_path' => 'img/featured/feature-7.jpg',
                'alt_text' => 'Feature Image 7',
                'is_primary' => 1,
                'sort_order' => 1,
            ],
            [
                'product_id' => 8,
                'variant_id' => 1,
                'image_path' => 'img/featured/feature-8.jpg',
                'alt_text' => 'Feature Image 8',
                'is_primary' => 1,
                'sort_order' => 1,
            ],

        ]);
    }
}
