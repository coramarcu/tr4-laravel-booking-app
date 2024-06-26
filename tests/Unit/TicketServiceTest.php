<?php

namespace Tests\Unit;

use App\Models\Events;
use App\Models\User;
use App\Services\TicketService;
use App\Repositories\EventsRepository;
use App\Repositories\TicketsRepository;
use Tests\TestCase;

class TicketServiceTest extends TestCase
{
    private EventsRepository $eventsRepositoryMock;
    private TicketsRepository $ticketsRepositoryMock;
    private TicketService $ticketService;

    protected function setUp(): void
    {
        parent::setUp();

        $this->eventsRepositoryMock = $this->createMock(EventsRepository::class);
        $this->ticketsRepositoryMock = $this->createMock(TicketsRepository::class);
        $this->ticketService = new TicketService($this->eventsRepositoryMock, $this->ticketsRepositoryMock);
    }

    public function test_allows_buying_ticket(): void
    {

        // ARRANGE
        $userMock = $this->createMock(User::class);
        $eventId = 1;
        $numberOfTickets = 3;
        $maxTicketsPerUser = 5;

        $eventMock = $this->createMock(Events::class);
        $eventMock->method('__get')->with('tickets_per_user')->willReturn($maxTicketsPerUser);

        $this->eventsRepositoryMock
            ->expects($this->once())
            ->method('findById')
            ->with($eventId)
            ->willReturn($eventMock);

        $this->ticketsRepositoryMock
            ->expects($this->exactly($numberOfTickets))
            ->method('createTicket')
            ->with($eventId, $userMock->id);

        // ACT
        $result = $this->ticketService->add($userMock->id, $numberOfTickets, $eventId);

        // ASSERT
        $this->assertTrue($result);

    }

}
