<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'adminmitologi@gmail.com'],
            [
                'name' => 'Admin Mitologi',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
                'role' => 'admin' // jika kamu punya kolom "role"
            ]
        );
    }
}
