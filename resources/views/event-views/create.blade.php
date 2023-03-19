@extends('layout')

@section('left')
<h1>Create</h1>
<form method="POST" action="/event" enctype="multipart/form-data">
  @csrf
  <div>
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value={{old('title')}}>
    @error('title')
    <p class="error-message">Please enter event title</p>
    @enderror
  </div>
  <div>
    <label for="tags">Tags</label>
    <input type="text" name="tags" id="tags" value={{old('tags')}}>
    @error('title')
    <p class="error-message">Please enter event tags</p>
    @enderror
  </div>
  <div>
    <label for="location">Location</label>
    <input type="text" name="location" id="location" value={{old('location')}}>
    @error('title')
    <p class="error-message">Please enter event location</p>
    @enderror
  </div>
  <div>
    <label for="description">Description</label>
    <textarea name="description" id="description" rows="3">{{old('description')}}</textarea>
    @error('title')
    <p class="error-message">Please enter event Description</p>
    @enderror
  </div>

  <div>
    {{-- <input type="text" value="1212-12-12" name="date"> --}}
    <input type="date" name="date">
  </div>
  <div>
    <input type="text" value="./images/crowd.jpg" name="image" value={{old('image')}}>
  </div>

  <div>
    <label for="file">Image</label>
    <input type="file" id="file" name='file'>
    @error('file')
    <p class="error-message">Please provide image for background</p>
    @enderror
  </div>

  <div>
    <label for="price">Price</label>
    <input type="number" name="price" id="price" value={{old('price')}}>
    @error('title')
    <p class="error-message">Please enter event Price</p>
    @enderror
  </div>
  <div>
    <label for="pool">Number of tickets</label>
    <input type="number" name="pool" id="pool" value={{old('pool')}}>
    @error('title')
    <p class="error-message">Please enter event Number of tickets</p>
    @enderror
  </div>

  <button type="submit">create</button>
</form>
@endsection
@section('right')
<h1>preview</h1>
@endsection