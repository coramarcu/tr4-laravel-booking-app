<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Events;
use App\Models\Tickets;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(10)->create()->each(function ($user) 
        {
            $events = Events::factory(rand(1, 3))->create();

            foreach ($events as $event) 
            {
                Tickets::factory()->create([
                    'user_id' => $user->id,
                    'event_id' => $event->id,
                ]);
            }
        });
    }
}
