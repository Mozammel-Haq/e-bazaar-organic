<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        User::factory()->create([
            'name' => 'Mozammel Haq',
            'email' => 'hmojammel29@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        // Basic data
        $this->call(CategorySeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(UnitSeeder::class);

        // Users and customers
        $this->call(CustomerSeeder::class);
        $this->call(CustomerAddressSeeder::class);

        // Suppliers and warehouses
        $this->call(SupplierSeeder::class);
        $this->call(WarehouseSeeder::class);

        // Products
        $this->call(ProductSeeder::class);

        // Inventory and stock
        $this->call(StockSeeder::class);
        $this->call(StockMovementSeeder::class);
        $this->call(PurchaseSeeder::class);

        // Discounts and coupons
        $this->call(DiscountSeeder::class);

        // Reviews
        $this->call(ReviewSeeder::class);
    }
}
