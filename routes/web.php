<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Event;

// All EVENTS
Route::get('/', function () {
  return view('events', [
    'events' => Event::all()
  ]);
});

// SINGLE EVENT
Route::get('/event/{id}', function ($id) {
  return view('event', [
    'event' => Event::find($id)
  ]);
});

// Route::get('/test', function () {
//   return response('<h1>dziala</h1>', 200)
//     ->header('Content-Type', 'text/plain');
// });

// Route::get('/posts/{id}', function ($id) {
//   return response('Post ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function (Request $request) {
//   return $request->name . ' ' . $request->city;
// });
