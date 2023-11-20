<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = \App\Models\User::create([
            'name' => 'Rijal',
            'email' => 'rijal@gmail.com',
            'role' => 'user',
            'address' => 'Jl. Panglima no 10',
            'phone' => '081234590123',
            'email_verified_at' => now(),
            'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
            'remember_token' => \Illuminate\Support\Str::random(10),
        ]);
    }
}
