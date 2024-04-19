@extends('layouts.master')

@section('title', 'Menu')


@section('main')

<div class="food_list">


    @foreach ($items as $item)
        <div class="food_item">
            <a href="/menu/{{ $item['id']}}">{{ $item['name'] }}</a>
            <p>{{ $item['description']}}</p>
            <p>${{ $item['price']}}</p>
        </div>
    @endforeach
</div>

@stop
