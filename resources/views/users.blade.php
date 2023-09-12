@extends('master')

@section('content')

<h1>users</h1>

  <ul>
    @foreach ($users as $user )
    <li>{{$user->firstName}} | <a href="">Edit</a> | <a href="">Delete</a></li>
    @endforeach
  </ul>

@endsection

