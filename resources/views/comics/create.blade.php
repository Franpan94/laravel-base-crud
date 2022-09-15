@extends('layouts.main')

@section('main-content')
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div class="p-4">Titolo <br>
            <input type="text" name="title" id="title"
              placeholder="Inserisci titolo" required
            >
        </div>
        <div class="p-4">Descrizione <br>
            <textarea name="description" id="description" cols="60" 
              rows="20" placeholder="Inserisci descrizione" required>
            </textarea>
        </div>
        <div class="p-4">Copertina <br>
            <textarea name="thumb" id="thumb" cols="30" 
              rows="10" placeholder="Inserisci copertina" required>
            </textarea>
        </div>
        <div class="p-4">Prezzo <br>
            <input type="number" id="price" name="price" 
              placeholder="Inserisci prezzo" required
            >
        </div>
        <div class="p-4">Serie <br>
            <input type="text" id="series" name="series" 
              placeholder="Inserisci serie" required
            >
        </div>
        <div class="p-4">Data <br>
            <input type="date" id="sale_date" name="sale_date" 
              placeholder="Inserisci data" required
            >
        </div>
        <div class="p-4">Tipo <br>
            <input type="text" id="type" name="type" 
              placeholder="Inserisci tipo" required
            >
        </div>
        <div class="p-4">
            <button class="btn btn-primary" type="submit">
                Invia
            </button>
        </div>
    </form>
@endsection
