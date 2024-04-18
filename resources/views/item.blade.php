@extends('layouts.master')

@section('title', 'ThuisBezorgd')

@section('main')

<h2>{{ $item['title'] }}</h2>
<p>{{ $item['description']}}</p>
@stop
