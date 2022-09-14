@extends('layouts.main')

@section('main-content')
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div>Titolo
            <input type="text" name="title" placeholder="Inserisci titolo">
        </div>
        <div>Descrizione
            <textarea name="description" cols="30" rows="10">Inserisci descrizione</textarea>
        </div>
        <div>Copertina
            <input type="text" name="thumb" placeholder="Inserisci copertina">
        </div>
        <div>Prezzo
            <input type="text" name="price" placeholder="Inserisci prezzo">
        </div>
        <div>Serie
            <input type="text" name="series" placeholder="Inserisci serie">
        </div>
        <div>Data
            <input type="text" name="sale_date" placeholder="Inserisci data">
        </div>
        <div>Tipo
            <input type="text" name="type" placeholder="Inserisci tipo">
        </div>
        <div>
            <button type="submit">
                Invia
            </button>
        </div>
    </form>
@endsection
