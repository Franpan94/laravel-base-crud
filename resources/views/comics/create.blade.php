@extends('layouts.main')

@section('main-content')
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div class="p-4">Titolo <br>
            <input type="text" name="title" id="title" placeholder="Inserisci titolo">
        </div>
        <div class="p-4">Descrizione <br>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Inserisci descrizione"></textarea>
        </div>
        <div class="p-4">Copertina <br>
            <input type="text" id="thumb" name="thumb" placeholder="Inserisci copertina">
        </div>
        <div class="p-4">Prezzo <br>
            <input type="text" id="price" name="price" placeholder="Inserisci prezzo">
        </div>
        <div class="p-4">Serie <br>
            <input type="text" id="series" name="series" placeholder="Inserisci serie">
        </div>
        <div class="p-4">Data
            <input type="text" id="sale_date" name="sale_date" placeholder="Inserisci data">
        </div>
        <div class="p-4">Tipo <br>
            <input type="text" id="type" name="type" placeholder="Inserisci tipo">
        </div>
        <div class="p-4">
            <button class="btn btn-dark" type="submit">
                Invia
            </button>
        </div>
    </form>
@endsection
