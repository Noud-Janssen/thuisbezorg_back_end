@extends('layouts.master')

@section('title', 'ThuisBezorgd')

@section('main')

<div class="col padding bg-gray w-1000 h-500">
    <h2 class="col-white">{{ $item['name'] }}</h2>
    <p>{{ $item['description']}}</p>
    <p>${{ $item['price']}}</p>
</div>
@stop
