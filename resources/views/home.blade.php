@extends('layout')

@section('left')
<form id='find-event-form' action="" onsubmit="findEvent()">
  <ul class="options">

    {{-- WHAT --}}
    <li class='box'>
      <div class="box-title">Type?</div>

      <label class="switch">
        <input type="checkbox" id="checkbox-1" class="checkbox-toggle">
        <span class="slider" data-on='Any' data-off='pick'></span>
      </label>

      <div id='toggle-section-1' class="toggle-section">
        <ul class="small-options">
          <li>
            <label for="rock">Rock
              <input type="checkbox" id="rock">
              <i class="fa-solid fa-check"></i>
            </label>
          </li>
          <li>
            <label for="pop">POP
              <input type="checkbox" id="pop">
              <i class="fa-solid fa-check"></i>
            </label>
          </li>
          <li>
            <label for="festival">Festival
              <input type="checkbox" id="festival">
              <i class="fa-solid fa-check"></i>
            </label>
          </li>
        </ul>
      </div>
    </li>

    {{-- WHERE --}}

    <li class='box'>
      <div class="box-title">Where?</div>

      <label class="switch">
        <input type="checkbox" id="checkbox-2" class="checkbox-toggle">
        <span class="slider" data-on='localy' data-off='go out'></span>
      </label>

      <div id='toggle-section-2' class="toggle-section">
        {{-- ADD MAP HERE? --}}
      </div>
    </li>

    {{-- WHEN --}}
    <li class='box'>
      <div class="box-title">When?</div>

      <label class="switch">
        <input type="checkbox" id="checkbox-3" class="checkbox-toggle">
        <span class="slider" data-on='this week' data-off='pick date'></span>
      </label>

      <div id='toggle-section-3' class="toggle-section">
        <div id="calendar">
          <div id="calendar-controls">
            <button id="prev-month" type="button">
              <i class="fa-solid fa-arrow-left"></i>
            </button>
            <div id="calendar-selected-date">
              <div id="calendar-selected-day">03</div>
              <div>
                <p id='calendar-month'>MAR</p>
                <p id='calendar-year'>2023</p>
              </div>
            </div>
            <button id="next-month" type="button">
              <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
          <ul id="calendar-weeks">
            <li>Sun</li>
            <li>Mon</li>
            <li>Tue</li>
            <li>Wed</li>
            <li>Thu</li>
            <li>Fri</li>
            <li>Sat</li>
          </ul>
          <ul id="calendar-days"></ul>
        </div>
      </div>
    </li>

    {{-- PRICE --}}
    <li class='box'>
      <div class="box-title">Price?</div>

      <label class="switch">
        <input type="checkbox" id="checkbox-4" class="checkbox-toggle">
        <span class="slider" data-on='free' data-off='select'></span>
      </label>

      <div id='toggle-section-4' class="toggle-section">
        <ul class="small-options">
          <li>
            <label for="price-any">any
              <input type="checkbox" id="price-any">
              <i class="fa-solid fa-check"></i>
            </label>
          </li>
          <li>
            <label for="price-low">0-20
              <input type="checkbox" id="price-low">
              <i class="fa-solid fa-check"></i>
            </label>
          </li>
          <li>
            <label for="price-mid">20-50
              <input type="checkbox" id="price-mid">
              <i class="fa-solid fa-check"></i>
            </label>
          </li>
          <li>
            <label for="price-high">50-2mln
              <input type="checkbox" id="price-high">
              <i class="fa-solid fa-check"></i>
            </label>
          </li>
        </ul>
      </div>
    </li>
  </ul>

  <div class="buttons">
    <button id="clear-search-form">Clear</button>
    <a href="/event/2">
      <button type="submit">Find</button>
    </a>
  </div>
</form>
@endsection

@section('right')
{{-- <div class="carousel-container">
  <div class="carousel">
    @foreach ($events as $event)
    <div href='/event/{{$event->id}}' class="cell" style="background-image: url('{{$event->image}}')">
      <div class="info">
        <h3 class="date">{{ date('d M', strtotime($event->date)) }}</h3>
        <p class="location">{{$event->location}}</p>
      </div>
    </div>
    @endforeach
    </a>
  </div>
</div> --}}
@endsection

@section('background')
<div class="background-image" style="background-image: url(../images/hero-bg-1.jpg);"></div>
@endsection