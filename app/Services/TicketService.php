<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\TicketsRepository;
use App\Repositories\EventsRepository;

class TicketService {
    protected $eventsRepository;
    protected $ticketsrepository;

    public function __construct(EventsRepository $eventsRepository, TicketsRepository $ticketsRepository)
    {
        $this->eventsRepository = $eventsRepository;
        $this->ticketsrepository = $ticketsRepository;
    }

    public function add($userId, $numberOfTickets, $eventId)
    {

        $event = $this->eventsRepository->findById($eventId);
        $maxTicketsPerCustomer = $event->tickets_per_user;

        if($numberOfTickets <= $maxTicketsPerCustomer)
        {
            for($i = 0; $i < $numberOfTickets; $i++) {
                $this->ticketsrepository->createTicket($eventId, $userId);
            }

            return true;

        }
        else
        {
            return false;
        }
    }
}
