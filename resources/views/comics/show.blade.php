@extends('layouts.app')

@section('main_content')
    <h1>{{ $comic['title'] }}</h1>
    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    <div>{{ $comic['type'] }}</div>
    <p>{{ $comic['description'] }}</p>
    <div>{{ $comic['sale_date'] }}</div>
    <h4>{{ $comic['price'] }} $</h4>
    <a href="{{ route('comic.edit', ['comic' => $comic->id]) }}">Modifica</a>
    <form action="{{ route('comic.destroy', ['comic' => $comic->id]) }}" method="post">
    @csrf
    @method('DELETE')
        <input type="submit" value="Elimina" onClick="return confirm('Sei sicuro di voler eliminare questo fumetto?')">
    </form>
@endsection