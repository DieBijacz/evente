<?php

use App\Http\Controllers\eventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// EVENT
Route::get('/', [eventController::class, 'index']);
Route::get('/event/{event}', [eventController::class, 'show']);
// USER
