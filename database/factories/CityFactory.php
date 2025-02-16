<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'name' => fake()->city(),
            'fullname' => fake()->city(),
            'excerpt' => 'A quick excerpt here',
            'bio' => 'Lorem ipsum and stuff',
            'website_url' => 'https://somewhere.com',
            'lat' => '',
            'long' => '',
            'thumbnail_img' => ' ',
            'banner_img' => ' '
        ];
    }
}
