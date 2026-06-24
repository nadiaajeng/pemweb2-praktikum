<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Admin
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@driveease.com',
            'password' => Hash::make('passwordadmin'), // Passwordnya: passwordadmin
            'role' => 'admin',
        ]);

        // 2. Akun Pelanggan
        User::create([
            'name' => 'Budi Pelanggan',
            'email' => 'pelanggan@gmail.com',
            'password' => Hash::make('passworduser'), // Passwordnya: passworduser
            'role' => 'user',
        ]);
    }
}