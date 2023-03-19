@extends('layout')
@section('left')
<div id="single-event-left">
  <div class="info">
    <i class="fa-solid fa-arrow-left-long">
      <a href="javascript:history.back()">go back</a>
    </i>
    <div class="event-date">
      <div class="day txt-big">{{ date('d', strtotime($event->date)) }}</div>
      <div class="month txt-mid">{{ date('M', strtotime($event->date)) }}</div>
    </div>
  </div>
  <x-tags :tagsCsv='$event->tags' />
  <div class="description">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur eaque blanditiis, eos deserunt quis
    laboriosam. Error modi alias tenetur vel!
  </div>
  <button>BOOK NOW</button>
</div>
@endsection

@section('right')
<div id="single-event-right">
  <div class="event-info">
    <h1 class="title txt-big">{{$event->title}}</h1>
    <div class="location txt-mid">{{$event->location}}</div>
  </div>
  <div class="bottom">
    <div class="events">
      <div class="event-card">
        <div class="event-location">London</div>
        <div class="event-date">
          <div class="day">14</div>
          <div class="month">JUN</div>
        </div>
        <div class="more-info">
          <div>Tickets: 168</div>
          <div>Starts from: 10£</div>
        </div>
      </div>
      <div class="event-card">
        <div class="event-location">London</div>
        <div class="event-date">
          <div class="day">14</div>
          <div class="month">JUN</div>
        </div>
        <div class="more-info">
          <div>Tickets: 168</div>
          <div>Starts from: 10£</div>
        </div>
      </div>
      <div class="event-card">
        <div class="event-location">London</div>
        <div class="event-date">
          <div class="day">14</div>
          <div class="month">JUN</div>
        </div>
        <div class="more-info">
          <div>Tickets: 168</div>
          <div>Starts from: 10£</div>
        </div>
      </div>
      <div class="event-card">
        <div class="event-location">London</div>
        <div class="event-date">
          <div class="day">14</div>
          <div class="month">JUN</div>
        </div>
        <div class="more-info">
          <div>Tickets: 168</div>
          <div>Starts from: 10£</div>
        </div>
      </div>
    </div>
    <div class="arrows">
      <button id="prev-button">
        <a href="./2">
          <i class="fa-solid fa-arrow-left-long"></i>
        </a>
      </button>
      <button id="next-button">
        <a href="./3">
          <i class="fa-solid fa-arrow-right-long"></i>
        </a>
      </button>
    </div>
  </div>
</div>
@endsection
@section('background')
<div class="background-image" style="background-image: url(../storage/{{$event->image}});"></div>
@endsection