@extends('layouts.master')

@section('title', 'Dashboard')


@section('main')

<h1 class="col-green text-outline padding">Accepted Reservations:</h1>
<div class="row w-100per padding margin wrap center">
    @foreach ($reservations as $reservation)
        @if ($reservation->accepted)
            <div class="bg-gray col-white w-1000 border-radios padding margin">
                <div class="row padding">
                    <h3 class="w-50per">Name:</h3>
                    <h3 class="w-50per">{{$reservation->name}}</h3>
                </div>
                <div class="row padding">
                    <h3 class="w-50per">Amount:</h3>
                    <h3 class="w-50per">{{$reservation->amount}}</h3>
                </div>
                <div class="row padding">
                    <h3 class="w-50per">Date:</h3>
                    <h3 class="w-50per">{{$reservation->date}}</h3>
                </div>
                <div class="row padding">
                    <h3 class="w-50per">Date:</h3>
                    <h3 class="w-50per">{{$reservation->time}}</h3>
                </div>
            </div>
        @endif
    @endforeach
</div>
<h1 class="col-green text-outline padding">Under review:</h1>
<div class="row w-100per padding margin wrap center">
    @foreach ($reservations as $reservation)
    @if(!$reservation->accepted)
    <form class="bg-gray col-white w-1000 border-radios padding margin" method="POST" action="{{ Route('reservations.edit')}}">
        @csrf
        <input type="hidden" name="id" value="{{$reservation->id}}"/>
        <div class="row padding">
            <h3 class="w-50per">Name:</h3>
            <h3 class="w-50per">{{$reservation->name}}</h3>
        </div>
        <div class="row padding">
            <h3 class="w-50per">Amount:</h3>
            <h3 class="w-50per">{{$reservation->amount}}</h3>
        </div>
        <div class="row padding">
            <h3 class="w-50per">Date:</h3>
            <h3 class="w-50per">{{$reservation->date}}</h3>
        </div>
        <div class="row padding">
            <h3 class="w-50per">Date:</h3>
            <h3 class="w-50per">{{$reservation->time}}</h3>
        </div>
        <div class="row padding center">
            <input type="submit" name="action" value="Decline"/>
            <input type="submit" name="action" value="Accept"/>
        </div>
    </form>
    @endif
    @endforeach
</div>


@endsection
