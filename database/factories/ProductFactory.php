<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'name' => fake()->word(),
            'description' => fake()->paragraph(),
            'material' => fake()->word(),
            'image' => fake()->imageUrl(),
            'price' => fake()->randomFloat(2, 1, 1000),
            'category_id' => \App\Models\Category::factory(),
        ];
    }
}
