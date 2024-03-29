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
      'events' => Event::latest()->filter(request(['tag', 'when', 'search']))->simplePaginate(10)
    ]);
  }

  // Show single event
  public function show(Event $event)
  {
    return view('event-views.event', ['event' => $event]);
  }

  // Craete event
  public function create()
  {
    return view('event-views.create');
  }

  // Store event
  public function store(Request $request)
  {
    // dd($request->file('file'));
    $formFields = $request->validate([
      "title" => 'required',
      "tags" => 'required',
      "location" => 'required',
      "description" => 'required',
      "price" => 'required',
      "pool" => 'required',
      "date" => 'required',
      "image" => 'required',
    ]);

    if ($request->hasFile('file')) {
      $formFields['image'] = $request->file('file')->store('images', 'public');
    }

    Event::create($formFields);

    return redirect('/')->with('message', 'Event added succesfully');
  }
}
