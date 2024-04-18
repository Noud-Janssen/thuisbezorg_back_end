@extends('layouts.master')
 
@section('title', 'ThuisBezorgd')

@section('main')
<form class="login_form" method="POST" action="{{ Route('users.post')}}">
        @csrf
        <h3>E-mail: </h3>
        <input type="text" id="mail" name="email" value="{{old('email')}}"" required/>
        <h3>Password: </h3>
        <input type="password" id="pwd" name="password"  required/>
    <input type="submit" id="login" value="Login"/>
    <p style="margin-top: 50px">
        No account?<br>
        <a href="/users/register">Create account!</a>
    </p>
</form>
@stop
