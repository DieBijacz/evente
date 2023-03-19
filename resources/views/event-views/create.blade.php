@extends('layout')

@section('left')
<h1>Create</h1>
<form method="POST" action="/event">
  @csrf
  <div>
    <label for="title">Title</label>
    <input type="text" name="title" id="title">
    @error('title')
    <p>Please enter event title</p>
    @enderror
  </div>
  <div>
    <label for="tags">Tags</label>
    <input type="text" name="tags" id="tags">
    @error('title')
    <p>Please enter event tags</p>
    @enderror
  </div>
  <div>
    <label for="location">Location</label>
    <input type="text" name="location" id="location">
    @error('title')
    <p>Please enter event location</p>
    @enderror
  </div>
  <div>
    <label for="description">Description</label>
    <textarea name="description" id="description" rows="3"></textarea>
    @error('title')
    <p>Please enter event Description</p>
    @enderror
  </div>

  <div>
    {{-- <input type="text" value="1212-12-12" name="date"> --}}
    <input type="date" name="date">
  </div>
  <div>
    <input type="text" value="./images/crowd.jpg" name="image">
  </div>

  <div>
    <label for="price">Price</label>
    <input type="number" name="price" id="price">
    @error('title')
    <p>Please enter event Price</p>
    @enderror
  </div>
  <div>
    <label for="pool">Number of tickets</label>
    <input type="number" name="pool" id="pool">
    @error('title')
    <p>Please enter event Number of tickets</p>
    @enderror
  </div>

  <button type="submit">create</button>
</form>
@endsection
@section('right')
<h1>preview</h1>
@endsection