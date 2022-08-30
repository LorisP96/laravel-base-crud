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
            <label for="description">Descrizione</label>
            <textarea name="description" id="" cols="30" rows="10" id="description"></textarea>
        </div>

        <br>
        <div>
            <label for="thumb">Url</label>
            <input type="text" id="thumb" name="thumb">
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
            <label for="sale_date">Data</label>
            <input type="date" id="sale_date" name="sale_date">
        </div>

        <br>
        <input type="submit" value="Salva">
    </form>
@endsection