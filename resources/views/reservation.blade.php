@extends('layouts.master')

@section('title', 'Reserveren')

@section('main')
    <form class="col bg-gray padding w-500" method="POST" accept="{{Route('reservations.create')}}">
        @csrf
        <div class="row padding">
            <h3 class="col-white w-50per">Naam</h3>
            <input class="w-50per" type="text" required name="name"/>
        </div>
        <div class="row padding">
            <h3 class="col-white w-50per">Aantal Personen</h3>
            <input class="w-50per" type="number" required name="amount"/>
        </div>
        <div class="row padding">
            <h3 class="col-white w-50per">Datum</h3>
            <input class="w-50per" type="date" required name="date"/>
        </div>
        <div class="row padding">
            <h3 class="col-white w-50per">Tijd</h3>
            <input class="w-50per" min="17:00" max="21:00" value="17:00" required type="time" name="time"/>
        </div>
        <input type="submit" value="Plaats reservering!"/>
    </form>
@stop
