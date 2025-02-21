@extends('/layouts/default')

@section('header')
<h1>Form</h1>
@endsection

@section('maincontent')

<form action="{{route('formsubmitted')}}" method="post">
  @csrf
  <label for="fullname">Full name:</label>
  <input type="text" name="fullname" id="fullname" placeholder="Type your full name" />

  <label for="email">Email:</label>
  <input type="text" name="email" id="email" placeholder="Type your email" />

  <button type="submit" class="bg-blue-500 px-4 py-2 mt-4">Submit</button>

</form>
@endsection

@section('footer')
<h2>this is a form footer</h2>
@endsection