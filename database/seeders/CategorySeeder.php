<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("categories")->insert([
            [
                "name" => "Fresh Meat",
                "slug" => "fresh-meat",
                "parent_id" => null,
                "is_active" => true,
                "image_path" => "img/categories/cat-1.jpg",
                "is_featured" => true,
            ],
            [
                "name" => "Vegetables",
                "slug" => "vegetables",
                "parent_id" => null,
                "is_active" => true,
                "image_path" => "img/categories/cat-2.jpg",
                "is_featured" => true,
            ],
            [
                "name" => "Fruit & Nut Gifts",
                "slug" => "fruit-nut-gifts",
                "parent_id" => null,
                "is_active" => true,
                "image_path" => "img/categories/cat-3.jpg",
                "is_featured" => true,
            ],
            [
                "name" => "Fresh Berries",
                "slug" => "fresh-berries",
                "parent_id" => null,
                "is_active" => true,
                "image_path" => "img/categories/cat-4.jpg",
                "is_featured" => false,
            ],
            [
                "name" => "Ocean Foods",
                "slug" => "ocean-foods",
                "parent_id" => null,
                "is_active" => true,
                "image_path" => "img/categories/cat-5.jpg",
                "is_featured" => true,
            ],
            [
                "name" => "Butter & Eggs",
                "slug" => "butter-eggs",
                "parent_id" => null,
                "is_active" => true,
                "image_path" => "img/categories/cat-6.jpg",
                "is_featured" => false,
            ],
            [
                "name" => "Fastfood",
                "slug" => "fastfood",
                "parent_id" => null,
                "is_active" => true,
                "image_path" => "img/categories/cat-7.jpg",
                "is_featured" => true,
            ],
            [
                "name" => "Fresh Onion",
                "slug" => "fresh-onion",
                "parent_id" => null,
                "is_active" => true,
                "image_path" => "img/categories/cat-8.jpg",
                "is_featured" => false,
            ],
            [
                "name" => "Papayaya & Crisps",
                "slug" => "papayaya-crisps",
                "parent_id" => null,
                "is_active" => true,
                "image_path" => "img/categories/cat-9.jpg",
                "is_featured" => false,
            ],
            [
                "name" => "Oatmeal",
                "slug" => "oatmeal",
                "parent_id" => null,
                "is_active" => true,
                "image_path" => "img/categories/cat-10.jpg",
                "is_featured" => true,
            ],
            [
                "name" => "Fresh Bananas",
                "slug" => "fresh-bananas",
                "parent_id" => null,
                "is_active" => true,
                "image_path" => "img/categories/cat-11.jpg",
                "is_featured" => false,
            ],

        ]);
    }
}
