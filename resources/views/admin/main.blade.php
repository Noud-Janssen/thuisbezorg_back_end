@extends('layouts.master')

@section('title', 'Dashboard')


@section('main')



<h1>Welcome {{auth()->user()->name}}</h1>

<form method="post" action="{{route('users.logout')}}" style="width: 500px">
    @csrf
    <a class="padding" href="{{route('admin.menu')}}">Edit menu</a>
    <a class="padding" href="{{route('admin.messages')}}">Messages</a>
    <a class="padding" href="{{route('admin.reservations')}}">Reservations</a>
    <input type="submit" value="logout"/>
</form>

@endsection
