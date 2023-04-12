<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // --------------- Superadmin Role -------------------
        Role::create(['name' => 'superadmin']);
        // Get all permissions
        $permissions = Permission::pluck('name');

        // Give all permissions to the superadmin role
        Role::findByName('superadmin')->givePermissionTo($permissions);


        // --------------- Admin Role -------------------------------
        Role::create(['name' => 'admin']);


        // --------------- Writer Role -------------------------------
        Role::create(['name' => 'writer']);



        // --------------- User Role -------------------------------
        Role::create(['name' => 'user']);
    }
}
