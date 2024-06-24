<?php

namespace App\Services;

use App\Models\User;
use App\Services\TicketService;
use App\Http\Requests\StoreUserRequest;
use App\Repositories\UsersRepository;
use Illuminate\Support\Facades\Log;

class UserService {
    protected $ticketService;
    protected $userRepository;
    public function __construct(TicketService $ticketService, UsersRepository $usersRepository) {
        $this->ticketService = $ticketService;
        $this->userRepository = $usersRepository;
    }

    public function register($userRequest, $eventId) {
        // $data = $request->validate([
        //     'first_name' => ['required','string'],
        //     'last_name'=> ['required','string'],
        //     'email'=> ['required','string'],
        //     'requested_tickets'=> ['required','integer'],
        // ]);

        // Log::debug("Data", $data);

        // User::create([
        //     'first_name' => $data['first_name'],
        //     'last_name' => $data['last_name'],
        //     'email' => $data['email'],
        //     'requested_tickets' => $data['requested_tickets'],
        // ]);

        // Log::info('Logging requested tickets: ' . json_encode($userData['requested_tickets']));

        // $newlyCreatedUser = User::latest()->first();
        $user = $this->userRepository->createUser($userRequest);
        $this->ticketService->add($user, $eventId);
    }
}