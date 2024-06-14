<?php

namespace App\Services;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Log;
use App\Services\TiketService;


class UserService {
    public function __construct() {}

    public function register(StoreUserRequest $request, $eventId) {
        $data = $request->validate([
            'first_name' => ['required','string'],
            'last_name'=> ['required','string'],
            'email'=> ['required','string'],
            'requested_tickets'=> ['required','string'],
        ]);

        Log::debug("Data", $data);

        User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'requested_tickets' => $data['requested_tickets'],
        ]);

        
        $newlyCreatedUser = User::latest()->first();
        // Log::info('first returns'. json_encode($newlyCreatedUser));
        // Log::info('Tickets bought for event id: ' . json_encode($eventId));
        $ticketService = new TicketService();
        $ticketService->add($newlyCreatedUser, $eventId, $data['requested_tickets']);
    }
}