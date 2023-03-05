@extends('layout')
@section('content')

<div class="product-page">
  {{-- <img src='.{{$event->image}}' class="background-image" /> --}}
  <img src='../images/guitar.jpg' class="background-image" />
  <div class="left">
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
    <div class="info">
      <h1 class="first">Linkin Park</h1>
      <div class="second">London</div>
    </div>
    <div class="arrows">
      <i class="fa-solid fa-arrow-left"></i>
      <i class="fa-solid fa-arrow-right"></i>
    </div>
  </div>
</div>

@endsection