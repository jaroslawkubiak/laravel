<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')

</head>

<body>
  <?php
  $name = "Jarka";
  ?>
  <h1>Portfolio {{$name}}</h1>
  <a href='{{route("company")}}'>Company</a><br />
  <a href='{{route("organization")}}'>Organization</a>
  <br />
  <br />
  <br />
  <a href='{{route("home")}}'>Home</a>

</body>

</html>