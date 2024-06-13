<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventsRequest;
use App\Http\Requests\UpdateEventsRequest;
use App\Models\Events;
use Inertia\Inertia;
use Illuminate\Support\Facades\Log;

class EventsController extends Controller
{
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
    public function store(StoreEventsRequest $request, $id)
    {
        Log::debug("We are here");
        Log::debug($id);
        Log::debug($request);

        return Inertia::render('SingleEvent/Confirm');

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
}
