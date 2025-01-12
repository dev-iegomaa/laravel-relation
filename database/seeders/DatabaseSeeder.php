<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'ibrahim',
                'email' => 'ibrahim.essam@waffarha.com',
                'password' => bcrypt('123456789'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ahmed',
                'email' => 'ahmed.essam@waffarha.com',
                'password' => bcrypt('123456789'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'nada',
                'email' => 'nada.essam@waffarha.com',
                'password' => bcrypt('123456789'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'gory',
                'email' => 'gory.essam@waffarha.com',
                'password' => bcrypt('123456789'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'youmna',
                'email' => 'youmna.ibrahim@waffarha.com',
                'password' => bcrypt('123456789'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        UserAddress::insert([
            [
                'name' => 'cairo',
                'street' => '503',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'giza',
                'street' => '125',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'zamalek',
                'street' => '59',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'sohag',
                'street' => '15',
                'user_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
