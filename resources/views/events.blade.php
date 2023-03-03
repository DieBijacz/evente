@extends('layout')
@section('content')

<div class="main-text">EVENTE</div>

<div class="carousel-container">
  <div class="carousel">
    @foreach ($events as $event)
    <div class="cell">
      <img src='{{$event->image}}'>
    </div>
    @endforeach
  </div>
</div>

@endsection