<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        // Create customer users first
        $customerUsers = [
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Robert Johnson',
                'email' => 'robert.johnson@example.com',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Emily Davis',
                'email' => 'emily.davis@example.com',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Michael Wilson',
                'email' => 'michael.wilson@example.com',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('users')->insert($customerUsers);

        // Get the user IDs we just created
        $userIds = DB::table('users')->whereIn('email', array_column($customerUsers, 'email'))->pluck('id')->toArray();

        // Create customer profiles
        $customers = [
            [
                'user_id' => $userIds[0], // John Doe
                'first_name' => 'John',
                'last_name' => 'Doe',
                'phone' => '+1-555-0201',
                'gender' => 'male',
                'date_of_birth' => '1985-06-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $userIds[1], // Jane Smith
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'phone' => '+1-555-0202',
                'gender' => 'female',
                'date_of_birth' => '1990-03-22',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $userIds[2], // Robert Johnson
                'first_name' => 'Robert',
                'last_name' => 'Johnson',
                'phone' => '+1-555-0203',
                'gender' => 'male',
                'date_of_birth' => '1978-11-08',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $userIds[3], // Emily Davis
                'first_name' => 'Emily',
                'last_name' => 'Davis',
                'phone' => '+1-555-0204',
                'gender' => 'female',
                'date_of_birth' => '1992-09-30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $userIds[4], // Michael Wilson
                'first_name' => 'Michael',
                'last_name' => 'Wilson',
                'phone' => '+1-555-0205',
                'gender' => 'male',
                'date_of_birth' => '1988-04-12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('customers')->insert($customers);
    }
}
