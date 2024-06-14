<?php

namespace App\Services;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Log;

class UserService {
    public function __construct() {}

    public function register(StoreUserRequest $request, $eventId) {
        $data = $request->validate([
            'first_name' => ['required','string'],
            'last_name'=> ['required','string'],
            'email'=> ['required','string'],
            'requested_tickets'=> ['required','integer'],
        ]);

        Log::debug("Data", $data);

        User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'requested_tickets' => $data['requested_tickets'],
        ]);

        Log::info('Logging requested tickets: ' . json_encode($data['requested_tickets']));

        
        $newlyCreatedUser = User::latest()->first();
        $ticketService = new TicketService();
        $ticketService->add($newlyCreatedUser, $eventId, $data['requested_tickets']);
    }
}