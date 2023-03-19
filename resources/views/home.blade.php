@extends('layout')

@section('left')
<form id='find-event-form' action="/" class="custom-scrollbar">
  <ul class="options">

    {{-- SEARCH --}}
    <li class='box'>
      <div class="box-title">Search?</div>
      <input type="text" id="search-text" name="search">
    </li>

    {{-- TYPE --}}
    <li class='box'>
      <div class="box-title">Type?</div>

      <label class="switch">
        <input type="checkbox" id="search-type" class="checkbox-toggle" name="checkbox-1">
        <span class="slider" data-on='Any' data-off='pick'></span>
      </label>

      <div id='toggle-section-1' class="toggle-section">
        <ul class="small-options">
          <li>
            <label for="rock">Rock
              <input type="checkbox" id="rock" name="search-type" value="Rock">
              <i class="fa-solid fa-check"></i>
            </label>
          </li>
          <li>
            <label for="pop">POP
              <input type="checkbox" id="pop" name="search-type" value="Pop">
              <i class="fa-solid fa-check"></i>
            </label>
          </li>
          <li>
            <label for="Hip-Hop">Hip-Hop
              <input type="checkbox" id="Hip-Hop" name="search-type" value="Hip-Hop">
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
        <input type="checkbox" id="search-where" class="checkbox-toggle" name="checkbox-2">
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
        <input type="checkbox" id="search-when" class="checkbox-toggle" name='checkbox-3'>
        <span class="slider" data-on='this week' data-off='pick date'></span>
      </label>

      <div id='toggle-section-3' class="toggle-section">
        <div id="calendar">
          <div id="calendar-controls">
            <button id="prev-month" type="button">
              <i class="fa-solid fa-arrow-left"></i>
            </button>
            <div id="calendar-selected-date" class="date-format-1">
              <div id="calendar-selected-day" class="day"></div>
              <div>
                <p id='calendar-month' class="month"></p>
                <p id='calendar-year'></p>
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
        <input type="checkbox" id="search-price" class="checkbox-toggle" name="checkbox-4">
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
    <button type="submit" id="search-button">Find</button>
  </div>
</form>
@endsection

@section('right')
<div id="suggested-events" class="custom-scrollbar">
  @foreach ($events as $event)
  <x-event-card :event='$event' />
  @endforeach
</div>

{{--
<x-carousel :events='$events' /> --}}
@endsection

@section('background')
<div class="background-image" style="background-image: url(../images/asd.jpg);"></div>
@endsection