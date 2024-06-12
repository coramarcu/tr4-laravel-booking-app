<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Models\Events;
use App\Services\UserService;
use Inertia\Inertia;


class UsersController extends Controller
{
    private $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        
        $request->validate([
            'first_name' => ['required','string'],
            'last_name'=> ['required','string'],
            'email'=> ['required','string'],
            'requested_tickets'=> ['required','string'],
        ]);

        $this->userService->register(
            $request->input('first_name'),
            $request->input('last_name'),
            $request->input('email'),
            $request->input('requested_tickets'),
        );

        // User::create([
        //     'first_name' => $data['first_name'],
        //     'last_name' => $data['last_name'],
        //     'email' => $data['email'],
        //     'requested_tickets' => $data['requested_tickets'],
        // ]);


        return Inertia::render('Events/Index', [
            'events'=> Events::all(),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
