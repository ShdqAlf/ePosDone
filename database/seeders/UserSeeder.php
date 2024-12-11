<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat pengguna dengan role admin
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'), // pastikan menggunakan hash
            'full_name' => 'Admin User Full Name',
            'status' => 'active', // status aktif
            'role' => 'admin', // role admin
        ]);

        // Membuat pengguna dengan role user
        User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => Hash::make('password123'), // pastikan menggunakan hash
            'full_name' => 'Regular User Full Name',
            'status' => 'active', // status aktif
            'role' => 'user', // role user
        ]);

        // Membuat pengguna lain jika diperlukan
        User::create([
            'name' => 'Another Admin',
            'email' => 'anotheradmin@example.com',
            'password' => Hash::make('password123'), // pastikan menggunakan hash
            'full_name' => 'Another Admin Full Name',
            'status' => 'inactive', // status tidak aktif
            'role' => 'admin', // role admin
        ]);

        User::create([
            'name' => 'Another User',
            'email' => 'anotheruser@example.com',
            'password' => Hash::make('password123'), // pastikan menggunakan hash
            'full_name' => 'Another User Full Name',
            'status' => 'active', // status aktif
            'role' => 'user', // role user
        ]);
    }
}
