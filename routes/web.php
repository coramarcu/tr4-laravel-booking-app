<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\EventsController;

Route::get('/', function () {
    return Inertia::render('Events/Index', [
        'name' => 'Cora',
        
    ]);
});

Route::get('/second-link', function () {
    return 'Second link!';
})->name('second');

Route::get('/events', [EventsController::class,'index'])->name('events.index');

Route::get('/event/{id}/buy', [EventsController::class, 'show'])->name('events.show');