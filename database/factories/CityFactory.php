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
            'common_name' => fake()->city(),
            'proper_name' => 'proper name',
            'bio' => 'Lorem ipsum and stuff',
            'thumbnail_img' => ' ',
            'banner_img' => ' '
        ];
    }
}
