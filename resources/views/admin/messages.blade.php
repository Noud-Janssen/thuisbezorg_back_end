@extends('layouts.master')

@section('title', 'Dashboard')


@section('main')

<div class="row w-100per padding margin wrap">
    @foreach ($messages as $message)
    @if (!$message->is_read)
    <form class="bg-gray col-white w-500 border-radios padding margin" method="POST" action="{{ Route('contact.mark_read')}}">
        @csrf
        <h3>
            {{$message->subject}}
        </h3>
        <h4>
            {{$message->sender_name}}
        </h4>
        <p>
            {{$message->text}}
        </p>
        <p>
            {{$message->email}}
        </p>
        <input type="hidden" name="id" value="{{$message->id}}"/>

        <input type="submit" value="Mark as read"/>
    </form>
    @endif
    @endforeach
</div>

@endsection
