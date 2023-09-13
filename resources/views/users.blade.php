@extends('master')

@section('content')

<a href="{{route('users.create')}}">Create user</a>

<hr>

<h1>users</h1>

  <ul>
    @foreach ($users as $user )
    <li>{{$user->firstName}} | <a href="{{route('users.edit',[$user->id])}}">Edit</a> | <a href="{{route('users.show', ['user' => $user->id])}}">Show</a></li>
    @endforeach
  </ul>

@endsection

