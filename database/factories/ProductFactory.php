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
            'name' => fake()->words(rand(1,3),true),
            'precio' => fake()->randomFloat(2,10000,100000),
            'descripcion' => fake()->words(10,true),
            'disponibilidad' => fake()->boolean(),
        ];
    }
}
