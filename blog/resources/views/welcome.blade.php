@extends('layout.main')

@section('title')
 welcome page
@endsection

@section('body')
<div class="row">
    <div class="col-md-6">
@if(count($errors)>0)
    @foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach

@endif

@if(session()->has('message'))
<div class="alert alert-sucess">
{{session()->get('message')}}
</div>

@endif
    <h2>Register</h2>
    <form method="post" action="{{ route('signup')}}">

    <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="firstname" class="form-control" id="firstname"  placeholder=" First name" name="firstname">

  </div>
  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="lastname" class="form-control" id="lastname" placeholder="Last Name" name="lastname">
   
  </div>

  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email"name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
  </div>


  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <button type="submit" class="btn btn-primary">Sign Up</button>
    {{ csrf_field()}}
</form>
    
    </div>
    <div class="col-md-6">
    <h2>Login</h2>
    <form method="post" action="{{ route('signin')}}">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"name="email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"name="password">
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
  {{ csrf_field()}}
</form>
    </div>
</div>
@endsection