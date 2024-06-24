<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\Events;
use Inertia\Inertia;
use App\Services\UserService;

class EventsController extends Controller
{
    private $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function index()
    {
        return Inertia::render('Events/Index', [
            'events'=> Events::all(),
        ]);
    }

    public function store(StoreUserRequest $storeUserRequest, $eventId)
    {

        $this->userService->register($storeUserRequest, $eventId);

        return Inertia::render('SingleEvent/Confirm', [
            'event' => Events::findOrFail($eventId),
        ]);
    }

    public function show($id)
    {
        $event = Events::findOrFail($id);
        
        return Inertia::render('SingleEvent/Index', [
            'event' => $event,
        ]);
    }

}
