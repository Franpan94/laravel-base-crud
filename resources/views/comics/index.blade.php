@extends('layouts.main');

@section('main-content')
    <div class="container-fluid">
        <div class="row">

            @forelse ($comics as $comic)
                <div class="col-2">
                    
                </div>
            @empty
                <div class="col-12">
                    <h1>Non ci sono fumetti</h1>
                </div>
            @endforelse

        </div>
    </div>
@endsection
