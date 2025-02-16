<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venue>
 */
class VenueFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'name' => fake()->company(),
            'fullname' => fake()->company(),
            'excerpt' => 'A bried excerpt',
            'bio' => 'A longer bio',
            'address1' => '',
            'address2' => '',
            'city_id' => City::factory(),
            'state_id' => 1,
            'zip' => '54911',
            'phone' => '414-555-1212',
            'website_url' => 'https://foxvalleylive.com',
            'lat' => ' ',
            'long' => ' ',
            'thumbnail_img' => ' ',
            'banner_img' => ' ',

        ];
    }
}
