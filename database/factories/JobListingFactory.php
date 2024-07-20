<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobListing>
 */
class JobListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => fake()->numberBetween(1, 3),
            'title' => fake()->text(30),
            'job_type' => fake()->text(20),
            'description' => fake()->sentence(50),
            'location' => fake()->address(),
            'salary' => fake()->numberBetween(2000, 9000),
        ];
    }
}
