<?php

use App\Http\Controllers\eventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// EVENT
Route::get('/', [eventController::class, 'index']);
Route::get('/event/create', [eventController::class, 'create']);
Route::post('/event', [eventController::class, 'store']);
Route::get('/event/{event}', [eventController::class, 'show']);
// USER
