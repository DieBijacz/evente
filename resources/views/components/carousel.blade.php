@props(['events'])

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