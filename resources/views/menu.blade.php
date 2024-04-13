@extends('layouts.master')

@section('title', 'ThuisBezorgd')


@section('main')

<div class="food_list">


    @foreach ($items as $item)
        <div class="food_item">
            <a href="/menu/{{ $item['id']}}">{{ $item['name'] }}</a>
            <p>{{ $item['description']}}</p>
        </div>
    @endforeach
</div>

@stop