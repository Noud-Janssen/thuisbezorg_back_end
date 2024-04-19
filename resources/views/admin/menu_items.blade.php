@extends('layouts.master')

@section('title', 'Dashboard')


@section('main')

<div class="row w-100per padding margin wrap center">
    <form class="bg-gray col-white w-1000 border-radios padding margin" method="POST" action="{{ Route('items.crud')}}">
        @csrf
        <input type="submit" name="action" value="Create"/>
    </form>
    @foreach ($items as $item)
    <form class="bg-gray col-white w-1000 border-radios padding margin" method="POST" action="{{ Route('items.crud')}}">
        @csrf
        <input type="hidden" name="id" value="{{$item->id}}"/>
        <div class="row padding">
            <h3 class="w-50per">Name:</h3>
            <input class="w-50per" type="text" name="name" value="{{$item->name}}">
        </div>
        <div class="row padding">
            <h3 class="w-50per">Description</h3>
            <textarea class="w-50per" name="description">{{$item->description}}</textarea>
        </div>
        <div class="row padding">
            <h3 class="w-50per">Price</h3>
            <input class="w-50per" type="number" name="price" value="{{$item->price}}" />
        </div>
        <div class="row padding center">
            <input type="submit" name="action" value="Update"/>
            <input type="submit" name="action" value="Delete"/>
        </div>
    </form>
    @endforeach
</div>


@endsection
