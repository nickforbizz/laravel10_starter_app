<?php

namespace Database\Seeders;

use App\Models\Guard;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        Guard::create([
            'name' => 'web',
            'active' => 1,
            'created_by'=> $users->random()->id,
        ]);
    }
}
