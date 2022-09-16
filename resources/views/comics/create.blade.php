@extends('layouts.main')

@section('main-content')
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div class="p-4">Titolo <br>
            <input type="text" name="title" id="title" placeholder="Inserisci titolo" required
              value="{{ old('title', $comic->title) }}"
            >
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="p-4">Descrizione <br>
            <textarea name="description" id="description" cols="60" rows="20"
              placeholder="Inserisci descrizione" required>{{ old('description', $comic->description) }}
            </textarea>
            @error('description')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="p-4">Copertina <br>
            <textarea name="thumb" id="thumb" cols="30" rows="10" 
              placeholder="Inserisci copertina" required>{{ old('thumb', $comic->thumb) }}
            </textarea>
            @error('thumb')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="p-4">Prezzo <br>
            <input type="number" step="0.01" min="2.50" id="price" name="price" 
              placeholder="Inserisci prezzo" required value="{{ old('price', $comic->price) }}"
            >
            @error('price')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="p-4">Serie <br>
            <input type="text" id="series" name="series" 
              placeholder="Inserisci serie" required value="{{ old('series', $comic->series) }}"
            >
        </div>
        <div class="p-4">Data <br>
            <input type="date" id="sale_date" name="sale_date" 
              placeholder="Inserisci data" required value="{{ old('sale_date', $comic->sale_date) }}"
            >
            @error('sale_date')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="p-4">Tipo <br>
            <input type="text" id="type" name="type" 
              placeholder="Inserisci tipo" required value="{{ old('type', $comic->type) }}"
            >
        </div>
        <div class="p-4">
            <button class="btn btn-primary" type="submit">
                Invia
            </button>
        </div>
    </form>
@endsection
