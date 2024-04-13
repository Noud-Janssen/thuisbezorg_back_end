@extends('layouts.master')

@section('title', 'Contact')


@section('main')

<form class="contact_form" method="POST" action="{{ Route('contact.post') }}">
    @csrf
    <div class="row">
        <h3>Subject: </h3>
        <input type="text" id="subject" name="subject" required/>
    </div>
    <div class="row">
        <h3>Name: </h3>
        <input type="text" id="from" name="from" required/>
    </div>
    <div class="row">
        <h3>E-mail: </h3>
        <input type="text" id="mail" name="mail" required/>
    </div>
    <textarea type="text" name="message_txt"></textarea>
    <input type="submit" id="submit_message" value="Send"/>
</form>

@stop