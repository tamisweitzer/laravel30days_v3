<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OurJob>
 */
class OurJobFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomFloat(2, 50000, 120000),
            'employer_id' => Employer::factory(),
        ];
    }
}
