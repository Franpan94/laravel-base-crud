@extends('layouts.main')

@section('main-content')
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="p-4">Titolo <br>
            <input type="text" name="title" id="title" 
              placeholder="Inserisci titolo" 
              value="{{ $comic->title }}" required
            >
        </div>
        <div class="p-4">Descrizione <br>
            <textarea name="description" id="description" cols="60" 
              rows="20" placeholder="Inserisci descrizione" required>{{ $comic->description }}
            </textarea>
        </div>
        <div class="p-4">Copertina <br>
            <textarea name="thumb" id="thumb" cols="30"
              rows="10" placeholder="Inserisci copertina" required>{{ $comic->thumb }}
            </textarea>
        </div>
        <div class="p-4">Prezzo <br>
            <input type="number" id="price" name="price" placeholder="Inserisci prezzo"
              value="{{ $comic->price }}" required
            >
        </div>
        <div class="p-4">Serie <br>
            <input type="text" id="series" name="series" placeholder="Inserisci serie" 
              value="{{ $comic->series }}" required
            >
        </div>
        <div class="p-4">Data <br>
            <input type="date" id="sale_date" name="sale_date" 
              value="{{ $comic->sale_date }}" required
            >
        </div>
        <div class="p-4">Tipo <br>
            <input type="text" id="type" name="type" placeholder="Inserisci tipo" 
              value="{{ $comic->type }}" required
            >
        </div>
        <div class="p-4">
            <button class="btn btn-primary" type="submit">
                Invia
            </button>
        </div>
    </form>
@endsection