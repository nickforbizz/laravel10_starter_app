<?php

namespace Database\Seeders;


use App\Models\PostCategory;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PostCategory::factory()->count(4)->create();
        Post::factory()->count(13)->create();
    }
}
