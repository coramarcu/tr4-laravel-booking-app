<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Events>
 */
class EventsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'event_name' => fake()->name(),
            'start_date_time' => fake()->dateTime(),
            'end_date_time'=> fake()->dateTime(),
            'city' => fake()->city(),
            'country' => fake()->country(),
            'tickets_allocated' => fake()->numberBetween(10,1000),
            'tickets_per_user'=> fake()->numberBetween(1,5),
        ];
    }
}
