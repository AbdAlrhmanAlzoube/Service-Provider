<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory()->count(10)->create();

        User::create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@admin.com',
            'phone' => '123456789',
            'password' => Hash::make('password'), // Change 'password' to desired admin password
            'type' => 'ADMIN',
        ]);
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@admin.com',
            'phone' => '123456789',
            'password' => Hash::make('password'), // Change 'password' to desired admin password
            'type' => 'ADMIN',
        ]);
    }
}
