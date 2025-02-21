@extends('/layouts/default')
@section('maincontent')

<?php
$name = "Jarka";
?>
<h1>Portfolio {{$name}}</h1>
<a href='{{route("company")}}'>Company</a>
<a href='{{route("organization")}}'>Organization</a>
@endsection

@section('footer')
<h2>this is portfolio a footer</h2>
@endsection