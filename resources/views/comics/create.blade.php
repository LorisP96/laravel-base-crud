@extends('layouts.app')

@section('main_content')

    <h1>Crea il tuo nuovo Fumetto</h1>

    <form action="{{ route('comic.store') }}" method="post">
        @csrf

        <div>
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title">
        </div>

        <br>
        <div>
            <label for="desc">Descrizione</label>
            <textarea name="desc" id="" cols="30" rows="10" id="desc"></textarea>
        </div>

        <br>
        <div>
            <label for="url">Url</label>
            <input type="text" id="url" name="url">
        </div>

        <br>
        <div>
            <label for="type">Tipo</label>
            <input type="text" id="type" name="type">
        </div>

        <br>
        <div>
            <label for="series">Serie</label>
            <input type="text" id="series" name="series">
        </div>

        <br>
        <div>
            <label for="price">Prezzo</label>
            <input type="number" id="price" name="price">
        </div>

        <br>
        <div>
            <label for="date">Data</label>
            <input type="date" id="date" name="date">
        </div>

        <button>Salva</button>
    </form>
@endsection