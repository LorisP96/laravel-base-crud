@extends('layouts.app')

@section('main_content')
    <h1>{{ $comic['title'] }}</h1>
    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    <div>{{ $comic['type'] }}</div>
    <p>{{ $comic['description'] }}</p>
    <div>{{ $comic['sale_date'] }}</div>
    <h4>{{ $comic['price'] }} $</h4>
@endsection