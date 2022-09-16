@extends('layouts.main')

@section('main-content')
    <div class="container">
        <div class="row">
            @if (session('edit'))
                <div class="alert alert-success mt-5">
                   <span>{{ session('edit') }} é stato modificato con successo</span>
                </div>   
            @endif
            @if (session('created'))
            <div class="alert alert-primary mt-5">
                <span>{{ session('created') }} é stato creato con successo</span>
             </div> 
            @endif
            <div class="col-12 text-center p-5">
                <h1>{{ $comic->title }}</h1>
                <img class="pt-5 pb-5" src="{{ $comic->thumb }}" alt="thumb">
                <p class="ms_font">{{ $comic->description }}</p>
                <h6>Prezzo: &euro; {{ $comic->price }}</h6>
                <h6>Anno: {{ $comic->sale_date }}</h6>
            </div>
        </div>
        <div class="d-flex justify-content-center pb-3">
            <button class="btn btn-success mx-2">
                <a href="{{ route('comics.edit', $comic->id) }}" class="text-white">Modifica</a>
            </button>
            <form action="{{ route('comics.destroy', $comic->id) }}" class="d-inline" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Elimina</button>
            </form>
        </div>
    </div>
@endsection
