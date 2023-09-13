@extends('master')

@section('content')

<h1>User data</h1>

<form action="{{route('users.destroy', ['user' => $user->id])}}" method="post">
  @csrf
  <input type="hidden" name='_method' value="DELETE">
  <button type="submit">Delete</button>
</form>

<p>{{$user->firstName . ' ' . $user->lastName}}</p>
<p>{{$user->email}}</p>


@endsection
