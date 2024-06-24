<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventsRequest;
use App\Http\Requests\UpdateEventsRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\Events;
use App\Models\User;
use Inertia\Inertia;
use App\Services\UserService;
use Illuminate\Support\Facades\Log;

class EventsController extends Controller
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
        return Inertia::render('Events/Index', [
            'events'=> Events::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $storeUserRequest, $eventId)
    {

        // $data = $storeUserRequest->validate([
        //     'first_name' => ['required','string'],
        //     'last_name'=> ['required','string'],
        //     'email'=> ['required','string'],
        //     'requested_tickets'=> ['required','integer'],
        // ]);

        // Log::debug("Data", $data);

        // $newUser = User::create([
        //     'first_name' => $data['first_name'],
        //     'last_name' => $data['last_name'],
        //     'email' => $data['email'],
        //     'requested_tickets' => $data['requested_tickets'],
        // ]);

        $this->userService->register($storeUserRequest, $eventId);

        return Inertia::render('SingleEvent/Confirm', [
            'event' => Events::findOrFail($eventId),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $event = Events::findOrFail($id);
        
        return Inertia::render('SingleEvent/Index', [
            'event' => $event,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Events $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventsRequest $request, Events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Events $events)
    {
        //
    }

    // public function success($id) {
    //     $event = Events::findOrFail($id);

    //     return Inertia::render('Tickets/Success', [
    //         'event' => $event,
    //     ]);
    // }
}
