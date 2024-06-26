<?php
namespace App\Repositories;

use App\Models\Tickets;

class TicketsRepository 
{

    public function createTicket($eventId, $userId) {
        return Tickets::create([
            'event_id' => $eventId,
            'user_id' => $userId,
        ]);
    }
}