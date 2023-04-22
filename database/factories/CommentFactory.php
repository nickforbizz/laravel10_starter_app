<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = User::all();
        $posts = Post::all();
        $title = $this->faker->sentence;
        return [
            'comment' => $title,
            'created_by' => $this->faker->randomElement($users),
            'post_id' => $this->faker->randomElement($posts),
        ];
    }
}
