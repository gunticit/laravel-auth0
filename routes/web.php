<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

// Public home route
Route::get('/', function () {
    return view('home');
});

// Protected dashboard - requires authentication
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/test', TestController::class);