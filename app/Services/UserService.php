<?php

namespace App\Services;

use App\Models\User;


class UserService {
    public function __construct() {}

    public function register(string $first_name, string $last_name, string $email, int $requested_tickets) {

        User::create([
            'first_name' =>$first_name,
            'last_name' => $last_name,
            'email' => $email,
            'requested_tickets' => $requested_tickets,
        ]);
    }
}