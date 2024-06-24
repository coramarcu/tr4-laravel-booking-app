<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'first_name' => ['required','string'],
            'last_name'=> ['required','string'],
            'email'=> ['required','string'],
            'requested_tickets'=> ['required','string'],
        ];
    }
}
