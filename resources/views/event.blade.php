@extends('layout')
@section('content')

<div class="product-page grid-7">
  <div class="left">
    {{-- <div class="page-transition page-transition-left"></div> --}}
    <div class="info">
      <div class="first">04</div>
      <div class="second">JUN</div>
    </div>
    <div class="description">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur eaque blanditiis, eos deserunt quis
      laboriosam. Error modi alias tenetur vel!
    </div>
    <button>BOOK NOW</button>
  </div>
  <div class="right">
    <div class="page-transition page-transition-right"></div>
    <div class="info">
      <h1 class="first">Linkin Park</h1>
      <div class="second">London</div>
    </div>
    <div class="arrows">
      <button id="prev-button">
        <a href="./2">
          <i class="fa-solid fa-arrow-left"></i>
        </a>
      </button>
      <button id="next-button">
        <a href="./3">
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      </button>
    </div>
  </div>
  <img src='.{{$event->image}}' class="background-image" />
</div>

@endsection