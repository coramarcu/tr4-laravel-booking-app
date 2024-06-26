<?php

namespace App\Services;

use App\Models\User;
use App\Services\TicketService;
use App\Http\Requests\StoreUserRequest;
use App\Repositories\UsersRepository;
use Illuminate\Support\Facades\Log;

class UserService
{
    protected $ticketService;
    protected $userRepository;
    public function __construct(TicketService $ticketService, UsersRepository $usersRepository)
    {
        $this->ticketService = $ticketService;
        $this->userRepository = $usersRepository;
    }

    public function register($userRequest, $eventId)
    {
        $user = $this->userRepository->createUser($userRequest);
        $this->ticketService->add($user->id, $user->requested_tickets, $eventId);
    }
}
