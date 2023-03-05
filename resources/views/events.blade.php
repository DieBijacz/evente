@extends('layout')
@section('content')

<div class="hero">
  <div class="main-text">Event<span class="main-text-e">e</span></div>
  <div class="carousel-container">
    <div class="carousel">
      {{-- TODO SET MAX LENGTH FOR ITEMS IN CAROUSEL --}}
      @foreach ($events as $event)
      <div href='/event/{{$event->id}}' class="cell">
        <img src='{{$event->image}}'>
        <div class="info">
          <div class="location">{{$event->location}}</div>
          <div class="date">
            <h3>{{ date('d M', strtotime($event->date)) }}</h3>
          </div>
        </div>
      </div>
      @endforeach

      </a>
    </div>
  </div>

  @endsection