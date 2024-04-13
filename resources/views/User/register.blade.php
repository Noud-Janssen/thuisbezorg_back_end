@extends('layouts.master')
 
@section('title', 'ThuisBezorgd')

@section('main')
<form class="login_form" method="POST" action="{{ Route('users.register')}}">
        @csrf
        <h3>Username: </h3>
        <input type="text" id="name" name="name" required/>
        <h3>E-mail: </h3>
        <input type="text" id="mail" name="mail" required/>
        <h3>Password: </h3>
        <input type="password" id="pwd" name="pwd" required/>
    <input type="submit" id="login" value="Register"/>
</form>
@stop
