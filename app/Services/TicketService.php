<?php

namespace App\Services;

use App\Models\Tickets;
use Illuminate\Support\Facades\Log;
use App\Models\User;


class TicketService {
    public function __construct() {}

    public function add(User $user, $eventId, $numberOfTickets) {

        for($i = 0; $i < $numberOfTickets; $i++){
            Tickets::create([
                'event_id' => $eventId,
                'user_id' => $user->id,
            ]);
        }
    }
}