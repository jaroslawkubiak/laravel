<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')

</head>

<body>
  <h1>Form</h1>
  <form action="{{route('formsubmitted')}}" method="post">
    @csrf
    <label for="fullname">Full name:</label>
    <input type="text" name="fullname" id="fullname" placeholder="Type your full name"  />

    <label for="email">Email:</label>
    <input type="text" name="email" id="email" placeholder="Type your email"  />

    <button type="submit" class="bg-blue-500 px-4 py-2 mt-4">Submit</button>

  </form>
  <br />
  <br />
  <br />
  <br />
  <a href='{{route("home")}}'>home</a>

</body>

</html>