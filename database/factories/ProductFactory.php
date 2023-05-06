<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\ProductCategory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = User::all();
        $categories = ProductCategory::all();
        $title = $this->faker->sentence;
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(100, 5000),
            'quantity' => $this->faker->numberBetween(1, 20),
            'color' => $this->faker->colorName,
            'size' => $this->faker->randomElement(['s', 'm', 'l', 'xl']),
            'label' => $this->faker->randomElement(['New', 'Featured', '', 'Discounted']),
            'created_by' => $this->faker->randomElement($users),
            'category_id' => $this->faker->randomElement($categories),
        ];
    }
}
