<?php

namespace Database\Factories;

use App\Models\Band;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'name' => fake()->company(),
            'admin_name' => 'Same as name value',
            'band_id' => Band::factory(),
            'venue_id' => Venue::factory(),
            'event_date' => fake()->date(),
            'event_time' => fake()->time(),
            'event_details' => 'Lorem ipsum ....'
        ];
    }
}
