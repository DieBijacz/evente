@extends('layout')

@section('left')
<div class="side left-side">
  <form id='find-event-form' action="" onsubmit="findEvent()">
    <ul>

      {{-- WHAT --}}
      <li>
        <div class="box-title">What Type?</div>
        <label class="switch">
          <input type="checkbox" id="checkbox-1" class="checkbox-toggle" checked>
          <span class="slider" data-on='Any' data-off='Pick'></span>
        </label>
        <div id='toggle-section-1' style="display:none;">
          <ul>
            <li>
              <label for="price-low">Rock</label>
              <input type="checkbox" id="price-low">
            </li>
            <li>
              <label for="price-mid">POP</label>
              <input type="checkbox" id="price-mid">
            </li>
            <li>
              <label for="price-high">Festival</label>
              <input type="checkbox" id="price-high">
            </li>
            <li>
              <label for="price-high">Rave</label>
              <input type="checkbox" id="price-high">
            </li>
          </ul>
        </div>
      </li>

      {{-- WHERE --}}
      <li>
        <div class="box-title">Where?</div>

        <label class="switch">
          <input type="checkbox" id="checkbox-2" class="checkbox-toggle" checked>
          <span class="slider" data-on='localy' data-off='trip'></span>
        </label>

        <div id='toggle-section-2' style="display:none;">
          <ul>
            <li>
              <label for="price-low">0-20</label>
              <input type="checkbox" id="price-low">
            </li>
            <li>
              <label for="price-mid">20-50</label>
              <input type="checkbox" id="price-mid">
            </li>
          </ul>
        </div>
      </li>

      {{-- WHEN --}}
      <li>
        <div class="box-title">When?</div>

        <label class="switch">
          <input type="checkbox" id="checkbox-3" class="checkbox-toggle" checked>
          <span class="slider" data-on='pick date' data-off='this week'></span>
        </label>

        <div id='toggle-section-3' style="display:none;">
          CALENDAR
        </div>
      </li>

      {{-- PRICE --}}
      <li>
        <div class="box-title">Price?</div>

        <label class="switch">
          <input type="checkbox" id="checkbox-4" class="checkbox-toggle" checked>
          <span class="slider" data-on='pick date' data-off='this week'></span>
        </label>

        <div id='toggle-section-4' style="display:none;">
          <ul>
            <li>
              <label for="price-low">0-20</label>
              <input type="checkbox" id="price-low">
            </li>
            <li>
              <label for="price-mid">20-50</label>
              <input type="checkbox" id="price-mid">
            </li>
            <li>
              <label for="price-high">50+</label>
              <input type="checkbox" id="price-high">
            </li>
          </ul>
        </div>
      </li>
    </ul>

    {{-- <button type="submit">Find</button> --}}
  </form>
</div>

@endsection

@section('right')
<div class="side">
  <div class="carousel-container">
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
  </div>
</div>


@endsection