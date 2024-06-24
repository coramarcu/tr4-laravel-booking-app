<?php
namespace App\Repositories;

use App\Models\Tickets;

class TicketsRepository {
    // protected $ticket;

    // public function __construct(Tickets $ticket) {
    //     $this->ticket = $ticket;
    // }

    public function createTicket($eventId, $userId) {
        return Tickets::create([
            'event_id' => $eventId,
            'user_id' => $userId,
        ]);
    }
}