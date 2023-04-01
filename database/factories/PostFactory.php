<?php

namespace Database\Factories;

use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AppModelsPosts>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $users = User::all();
        $categories = PostCategory::all();
        $title = $this->faker->sentence;
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => $this->faker->paragraph,
            'created_by' => $this->faker->randomElement($users),
            'category_id' => $this->faker->randomElement($categories),
        ];
    }
}
