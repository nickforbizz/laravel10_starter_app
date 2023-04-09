<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Disable foreign key constraints
        Schema::disableForeignKeyConstraints();

        // Truncate the permissions table
        DB::table('permissions')->truncate();

        // Enable foreign key constraints
        Schema::enableForeignKeyConstraints();

        $users = User::where('active',1)->get();

        Permission::create(['name' => 'create users', 'guard_name' => 'web', 'created_by'=> $users->random()->id,]);
        Permission::create(['name' => 'edit users', 'guard_name' => 'web', 'created_by'=> $users->random()->id,]);
        Permission::create(['name' => 'delete users', 'guard_name' => 'web', 'created_by'=> $users->random()->id,]);
        Permission::create(['name' => 'activate users', 'guard_name' => 'web', 'created_by'=> $users->random()->id,]);
        Permission::create(['name' => 'deactivate users', 'guard_name' => 'web', 'created_by'=> $users->random()->id,]);

        Permission::create(['name' => 'create post categories', 'guard_name' => 'web', 'created_by'=> $users->random()->id,]);
        Permission::create(['name' => 'edit post categories', 'guard_name' => 'web', 'created_by'=> $users->random()->id,]);
        Permission::create(['name' => 'delete post categories', 'guard_name' => 'web', 'created_by'=> $users->random()->id,]);
        Permission::create(['name' => 'publish post categories', 'guard_name' => 'web', 'created_by'=> $users->random()->id,]);
        Permission::create(['name' => 'unpublish post categories', 'guard_name' => 'web', 'created_by'=> $users->random()->id,]);

        Permission::create(['name' => 'create posts', 'guard_name' => 'web', 'created_by'=> $users->random()->id,]);
        Permission::create(['name' => 'edit posts', 'guard_name' => 'web', 'created_by'=> $users->random()->id,]);
        Permission::create(['name' => 'delete posts', 'guard_name' => 'web', 'created_by'=> $users->random()->id,]);
        Permission::create(['name' => 'publish posts', 'guard_name' => 'web', 'created_by'=> $users->random()->id,]);
        Permission::create(['name' => 'unpublish posts', 'guard_name' => 'web', 'created_by'=> $users->random()->id,]);


    }
}
