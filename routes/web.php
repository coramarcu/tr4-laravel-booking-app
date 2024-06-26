<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\EventsController;


Route::get('/', function () 
{
    return redirect()->route('events.index');
});

Route::get('/events', [EventsController::class,'index'])->name('events.index');

Route::get('/event/{id}/tickets', [EventsController::class, 'show'])->name('events.show');

Route::post('/event/{id}/tickets', [EventsController::class, 'store'])->name('events.store');

