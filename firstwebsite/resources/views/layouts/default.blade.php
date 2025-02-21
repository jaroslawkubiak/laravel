<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hoome</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>

<body>
  <header>
    @yield('header')
  </header>

  <main>
    @yield('maincontent')
  </main>

  <footer>@yield('footer')
    <a href='{{route("home")}}'>return to home</a>
  </footer>
</body>

</html>