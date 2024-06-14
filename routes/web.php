<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\UsersController;


Route::get('/', function () {
    return Inertia::render('Events/Index', [
        'name' => 'Cora',
        
    ]);
});


Route::get('/events', [EventsController::class,'index'])->name('events.index');

Route::get('/event/{id}/tickets', [EventsController::class, 'show'])->name('events.show');

Route::post('/event/{id}/tickets', [EventsController::class, 'store'])->name('events.store');

