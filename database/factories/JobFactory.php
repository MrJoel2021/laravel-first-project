<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Create an employer first and link the job to that employer
            'employer_id' => Employer::factory(),

            // Create a fake job title
            'title' => fake()->jobTitle(),

            // Create a salary value
            'salary' => '£50000',
        ];
    }
}