<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@rasmeyssupremacy.com'],
            [
                'name' => 'Rasmey Supremacy Admin',
                'phone' => '0700000000',
                'password' => Hash::make('LH@44'),
                'role' => 'admin',
            ]
        );
    }
}