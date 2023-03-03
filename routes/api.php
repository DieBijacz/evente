<?php

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/houses', function () {
  return response()->json([
    'houses' => [
      'name' => 'Green Land',
      'number' => 12
    ]
  ]);
});

Route::get('/events', function () {
  return Event::all();
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});
