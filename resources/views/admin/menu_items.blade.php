@extends('layouts.master')

@section('title', 'Dashboard')


@section('main')

<div class="row w-100per padding margin wrap">
    @foreach ($items as $item)
    <form class="bg-gray col-white w-500 border-radios padding margin" method="POST" action="{{ Route('items.crud')}}">
        @csrf
        <input type="hidden" name="id" value="{{$item->id}}"/>
        <h3>
            {{$item->name}}
        </h3>
        <div>
            <input type="submit" name="update" value="Update"/>
            <input type="submit" name="Delete" value="Delete"/>
        </div>
    </form>
    @endforeach
</div>

@endsection
