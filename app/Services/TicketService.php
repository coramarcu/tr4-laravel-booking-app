<?php

namespace App\Services;

use App\Models\Tickets;
use App\Models\User;
use App\Models\Events;

class TicketService {
    public function __construct() {}

    public function add(User $user, $eventId, $numberOfTickets) {

        $event = Events::find($eventId);
        $maxTicketsPerCustomer = $event->tickets_per_user;

        if($numberOfTickets <= $maxTicketsPerCustomer) {
            for($i = 0; $i < $numberOfTickets; $i++) {
                Tickets::create([
                    'event_id' => $eventId,
                    'user_id' => $user->id,
                ]);
            }

        }
        else {
            return null;
        }
    }
}