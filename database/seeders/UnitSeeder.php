<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('units')->insert([
            [
                'name' => 'Kilogram',
                'symbol' => 'kg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gram',
                'symbol' => 'g',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Liter',
                'symbol' => 'L',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Milliliter',
                'symbol' => 'mL',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Piece',
                'symbol' => 'pc',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dozen',
                'symbol' => 'dz',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pound',
                'symbol' => 'lb',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ounce',
                'symbol' => 'oz',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
