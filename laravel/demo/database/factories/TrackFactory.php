<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Track>
 */
class TrackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->unique()->name(),
            'description' => fake()->unique()->text(100),
            'image' => fake()->unique()->imageUrl(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
