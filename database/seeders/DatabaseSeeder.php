<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'password' => bcrypt('123456789')
            ],
            [
                'name' => 'ahmed',
                'email' => 'ahmed.essam@waffarha.com',
                'password' => bcrypt('123456789')
            ],
            [
                'name' => 'nada',
                'email' => 'nada.essam@waffarha.com',
                'password' => bcrypt('123456789')
            ],
            [
                'name' => 'gory',
                'email' => 'gory.essam@waffarha.com',
                'password' => bcrypt('123456789')
            ]
        ]);

        UserAddress::insert([
            [
                'name' => 'cairo',
                'street' => '503',
                'user_id' => 1
            ],
            [
                'name' => 'giza',
                'street' => '125',
                'user_id' => 2
            ],
            [
                'name' => 'zamalek',
                'street' => '59',
                'user_id' => 3
            ],
            [
                'name' => 'sohag',
                'street' => '15',
                'user_id' => 4
            ]
        ]);
    }
}
