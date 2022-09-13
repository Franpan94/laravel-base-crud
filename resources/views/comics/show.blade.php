@extends('layouts.main')

@section('main-content')
   <div class="container">
       <div class="row">
            <div class="col-12 text-center p-5">
                <h1>{{ $comic->title }}</h1>
                <img class="pt-5 pb-5" src="{{ $comic->thumb }}" alt="thumb">
                <p class="ms_font">{{ $comic->description }}</p>
                <h6>Prezzo: &euro; {{ $comic->price }}</h6>
                <h6>Anno: {{ $comic->sale_date }}</h6>
            </div>
       </div>
   </div>
@endsection