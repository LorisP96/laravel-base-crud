@extends('layouts.app')

@section('main_content')

    <h1>I nostri Fumetti</h1>

    @foreach ($comics as $comic)

        <div class="comic">
            <h3>{{ $comic['title'] }}</h3>
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            <h4>{{ $comic['price'] }} $</h4>
            <a href="{{ route('comic.show', ['comic' => $comic->id]) }}">Dettagli {{ $comic['type'] }}</a>
        </div>
        <br>
        <hr>
        
    @endforeach

@endsection