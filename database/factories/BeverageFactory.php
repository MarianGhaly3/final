<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Beverage>
 */
class BeverageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [        
            'beverageName' => fake()->sentence(2, true),
            'content' => fake()->sentence(10, true),
            'price' => fake()->numberBetween(35, 150),
            'published' => fake()->numberBetween(0, 1),
            'special' => fake()->numberBetween(0, 1),
            'image' => fake()->imageUrl(),
            'category_id' => fake()->numberBetween(1, 4),
        ];
    }
}
