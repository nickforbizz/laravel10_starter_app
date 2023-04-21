<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductCategory>
 */
class ProductCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->word;
        $users = User::all();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'created_by' => $this->faker->randomElement($users),
            'description' => $this->faker->sentence,
        ];
    }
}
