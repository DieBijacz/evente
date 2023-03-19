@if(session()->has('message'))
<div class="message" x-data="{ open: true }" x-show="open" x-init="setTimeout(() => open=false, 3000)">
  {{session('message')}}
</div>
@endif