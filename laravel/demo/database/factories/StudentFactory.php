<?php

namespace Database\Factories;

use App\Models\Track;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
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
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'gender' => fake()->randomElement(['male', 'female']),
            //  'image'=>"https://images.pexels.com/photos/35537/child-children-girl-happy.jpg",
            'image' => fake()->imageUrl(),
            'age' => fake()->numberBetween(19, 30),
            'address' => fake()->address(),
            'created_at' => now(),
            'updated_at' => now(),
            'track_id'=>Track::inRandomOrder()->value('id')

        ];
    }
}
