@props(['event'])

<a href="/event/{{$event->id}}">
  <div class="card">
    <div class="date-format-1">
      <div class="day">{{ date('d', strtotime($event->date)) }}</div>
      <div>
        <p class="month">{{ date('M', strtotime($event->date)) }}</p>
        <p class="year">{{ date('Y', strtotime($event->date)) }}</p>
      </div>
    </div>
    <div class="info">
      <div class="event-title">{{$event -> title}}</div>
      <div class="event-location">{{$event -> location}}</div>
      <x-tags :tagsCsv='$event->tags' />
    </div>
  </div>
</a>