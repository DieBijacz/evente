@extends('layout')
@section('content')

<div class="main-text">EVENTE</div>

@if(count($listings) == 0)
<p>No Listings found</p>
@endif

<div class="carousel-container">
  <div class="carousel">
  </div>
</div>

@foreach ($listings as $listing)
  <h3 class="text-2xl">
    <a href="show.html">{{$listing->title}}</a>
  </h3>
@endforeach

@endsection