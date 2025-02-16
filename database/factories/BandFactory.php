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
            'fullname' => fake()->company(),
            'excerpt' => 'A brief excerpt',
            'bio' => 'A longer bio',
            'city_id' => \App\Models\City::factory(),
            'state_id' => \App\Models\State::factory(),
            'website_url' => 'https://foxvalleylive.com',
            'thumbnail_img' => ' ',
            'banner_img' => ' '
        ];
    }
}
