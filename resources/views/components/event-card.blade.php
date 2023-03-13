@props(['event'])

<div class="card">
  <a href="/event/{{$event->id}}" class="event-title">{{$event -> title}}</a>
  <div class="event-location">{{$event -> location}}</div>
  <x-tags :tagsCsv='$event->tags' />
</div>