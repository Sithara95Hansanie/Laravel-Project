@extends('layout.main')

@section('body')
<h2>welcome logged in user</h2>
<ul>
<li>first name:{{Auth::user()->firstname}}</li>
<li>last name:{{Auth::user()->lastname}}</li>
<li>last name:{{Auth::user()->email}}</li>
<li><a href="{{route('signout')}}">logout</a></li>

</ul>
@endsection