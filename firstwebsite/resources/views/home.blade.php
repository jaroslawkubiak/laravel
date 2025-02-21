@extends('/layouts/default')

@section('header')
<h1>This is a header</h1>
@endsection

@section('maincontent')
<h2>Home</h2>
<a href='{{route("portfolio")}}'>Portfolio</a>
<a href='{{route("contact")}}'>Contact</a>
<a href='{{route("form")}}'>Form</a>
<img src="{{asset('images/obi.png')}}" alt="image">
@endsection


@section('footer')
<h2>this is a footer</h2>
@endsection