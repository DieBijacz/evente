<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="images/favicon.ico" />
  <script src="/js/main.js" defer type="module"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Evente</title>
  @vite(['resources/scss/main.scss'])
</head>

<body>
  <nav class="nav">
    <ul>
      <li><a href="/">evente</a></li>
      <li><a href="/event/create">create</a></li>
    </ul>
  </nav>
  <main>

    <div class="left-side">
      <div class="block-1 page-transition"></div>
      <div class="block-2 page-transition">event</div>
      @yield('left')
    </div>

    <div class="right-side">
      <x-flash-message />
      <div class="block-1 page-transition"></div>
      <div class="block-2 page-transition">e</div>
      @yield('right')
    </div>

    @yield('background')
  </main>
</body>

</html>