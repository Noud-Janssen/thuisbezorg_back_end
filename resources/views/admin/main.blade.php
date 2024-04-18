@extends('layouts.master')

@section('title', 'Dashboard')


@section('main')



<h1>Welcome {{auth()->user()->name}}</h1>

<div class="bg-gray col">
    <a href="{{route('admin.menu')}}">Edit menu</a>
    <a href="{{route('admin.messages')}}">Messages</a>
</div>

<form method="post" action="{{route('users.logout')}}" style="width: 500px">
    @csrf
    <input type="submit" value="logout"/>
</form>

@endsection