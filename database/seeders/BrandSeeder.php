<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('brands')->insert([
            [
                'name' => 'Fresh Farms',
                'slug' => 'fresh-farms',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ocean Select',
                'slug' => 'ocean-select',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dairy Pure',
                'slug' => 'dairy-pure',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Golden Harvest',
                'slug' => 'golden-harvest',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nature\'s Best',
                'slug' => 'natures-best',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
