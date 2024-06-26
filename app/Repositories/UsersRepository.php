<?php
namespace App\Repositories;

use App\Models\Tickets;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;

class UsersRepository 
{

    public function createUser(StoreUserRequest $storeUserRequest) 
    {
        $data = $storeUserRequest->validate([
            'first_name' => ['required','string'],
            'last_name'=> ['required','string'],
            'email'=> ['required','string'],
            'requested_tickets'=> ['required','integer'],
        ]);

        // Log::debug("Data", $data);

        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'requested_tickets' => $data['requested_tickets'],
        ]);

    }
}