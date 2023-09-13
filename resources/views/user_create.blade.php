@extends('master')

@section('content')

<h1>Create User</h1>

@if(session()->has('message'))
  {{session()->get('message')}}
@endif

<form action="{{route('users.store')}}" method="post">
  @csrf
  <input type="text" name="firstName" placeholder="First name">
  <input type="text" name="lastName" placeholder="Last name">
  <input type="text" name="email" placeholder="Email">
  <button type="submit">Create</button>
</form>



@endsection
