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
            'name' => 'Superadmin',
            'email' => 'superadmin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$IMBPKfdPnvT05HMqh5EgjOXni77TuxdO0tYovQthbdVzXO5KjAtBi' // Superadmin@2023
        ]);

        $superadmin->assignRole('user', 'writer', 'admin', 'superadmin');



        // admin
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$LpdLRNylDkhVwra6TRU76.i5sF4wos9xHK3ibe1O.wg09N7RKHx4i' // Admin@2023
        ]);

        $admin->assignRole('user', 'writer', 'admin');



        // writer
        $writer = User::create([
            'name' => 'Writer',
            'email' => 'writer@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$UoANkk/3ey0K.cRRolCILut/.tVfMPqubz8SuHg1yE6rArISyIitW' // Writer@2023
        ]);

        $writer->assignRole('user', 'writer');



        // user
        $user = User::create([
            'name' => 'User',
            'email' => 'user@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$UCWqNwAix3hL/kFiF6w9pO3rPhk4gaxU/V7wU5szzQtJYtalzsS0u' // User@2023
        ]);

        $user->assignRole('user');
    }
}
