<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Band>
 */
class BandFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'name' => fake()->name(),
            'common_name' => fake()->company(),
            'proper_name' => fake()->company(),
            'city_id' => \App\Models\City::factory(),
            'state_id' => \App\Models\State::factory(),
            'website_url' => 'https://foxvalleylive.com',
            'thumbnail_url' => ' ',
            'banner_img' => ' '
        ];
    }
}
