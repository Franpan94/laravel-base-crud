@extends('layouts.main')

@section('main-content')
    <div class="container-fluid ms_pl">
        <div class="row pt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Serie</th>
                        <th scope="col">Tipo</th>
                    </tr>
                </thead>
                @forelse ($comics as $comic)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $comic->id }}</th>
                            <td><a href="{{ route('link', $comic->id) }}">{{ $comic->title }}</a></td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->type }}</td>
                        </tr>
                    </tbody>
                @empty
                    <div class="col-12">
                        <h1>Non ci sono fumetti</h1>
                    </div>
                @endforelse
            </table>
        </div>
    </div>
@endsection
