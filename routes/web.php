<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Users/Index', [
        'name' => 'Cora',
        
    ]);
});

Route::get('/second-link', function () {
    return 'Second link!';
})->name('second');