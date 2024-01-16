<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Administrator',
            'email' => 'dedyse@kapesolusi.work',
            'password' => Hash::make('123456'),
            'roles' => 'ADMIN',
            'email_verified_at' => now(),
            'phone' => '085179553719',
        ]);
    }
}
