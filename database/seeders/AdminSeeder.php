<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // superadmin
        $superadmin = User::create([
            'fname' => 'Super',
            'lname' => 'Admin',
            'sname' => '',
            'name' => 'Superadmin User',
            'email' => 'superadmin@admin.com',
            'email_verified_at' => now(),
            'active' => 1,
            'password' => 'Superadmin@2023' // Superadmin@2023
        ]);

        $superadmin->assignRole('user', 'writer', 'admin', 'superadmin');



        // admin
        $admin = User::create([
            'fname' => 'Just',
            'lname' => 'Admin',
            'sname' => '',
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'active' => 1,
            'password' => 'Admin@2023' // Admin@2023
        ]);

        $admin->assignRole('user', 'writer', 'admin');



        // writer
        $writer = User::create([
            'fname' => 'Just',
            'lname' => 'Writer',
            'sname' => '',
            'name' => 'Writer',
            'email' => 'writer@admin.com',
            'email_verified_at' => now(),
            'active' => 1,
            'password' => 'Writer@2023' // Writer@2023
        ]);

        $writer->assignRole('user', 'writer');



        // user
        $user = User::create([
            'fname' => 'Just',
            'lname' => 'User',
            'sname' => '',
            'name' => 'User',
            'email' => 'user@admin.com',
            'email_verified_at' => now(),
            'active' => 1,
            'password' => 'User@2023' // User@2023
        ]);

        $user->assignRole('user');
    }
}
