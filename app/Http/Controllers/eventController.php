<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class eventController extends Controller
{
  // Show all events
  public function index()
  {
    return view('home', [
      'events' => Event::latest()->filter(request(['tag', 'when']))->get()
    ]);
  }

  // Show single event
  public function show(Event $event)
  {
    return view('events-views/event', ['event' => $event]);
  }
}
