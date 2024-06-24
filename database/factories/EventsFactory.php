<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventsFactory extends Factory
{
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
