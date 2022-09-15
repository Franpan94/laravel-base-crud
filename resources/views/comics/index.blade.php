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
                        <th>Modifica/Elimina</th>
                    </tr>
                </thead>
                @forelse ($comics as $comic)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $comic->id }}</th>
                            <td><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>
                                <button class="btn btn-success">
                                    <a href="{{ route('comics.edit', $comic->id) }}" class="text-white">Modifica</a>
                                </button>
                                <form action="{{ route('comics.destroy', $comic->id) }}" class="d-inline">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger">Elimina</button>
                                </form>
                            </td>
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
