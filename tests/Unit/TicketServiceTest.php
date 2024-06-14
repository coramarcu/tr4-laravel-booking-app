<?php

namespace Tests\Unit;

use App\Services\TicketService;
use PHPUnit\Framework\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Log;


class TicketServiceTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_user_cannot_buy_more_tickets_than_max_per_user(): void
    {
        $user = new class {
            public $id = 1;
        };

        $event = new class {
            public $id = 10;
            public $tickets_per_user = 3;
        };

        $ticketService = new TicketService();

        $this->assertSame(null, $ticketService->add($user, $event->id, 5));

    }
}
