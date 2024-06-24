<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'first_name' => fake()->name(),
            'last_name'=> fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'requested_tickets'=> fake()->numberBetween(1, 5),
        ];
    }

}
