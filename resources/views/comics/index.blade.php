@extends('layouts.main')

@section('main-content')
    <div class="container-fluid ms_pl">
        <div class="row pt-3">
            @if (session('delete'))
                <div class="alert alert-danger">
                    <span>{{ session('delete') }} é stato eliminato con successo</span>
                </div>
            @endif
            @if (session('edit'))
                <div class="alert alert-success mt-5">
                   <span>{{ session('edit') }} é stato modificato con successo</span>
                </div>   
            @endif
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
                                <form action="{{ route('comics.destroy', $comic->id) }}" 
                                    class="d-inline ms_delete_elements" method="POST" date ='{{ $comic->title }}'>
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger">Elimina</button>
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

{{-- @section('footer-script')
  <script>
      const deleteElements = document.querySelectorAll('.ms_delete_elements');
      console.log(deleteElements);
      deleteElements.forEach(deleteElement => {
        deleteElement.addEventListener('submit', function(event)){
            const title = this.getAttribute('date');
            event.preventDefault();
            const result = window.confirm(`Sei sicuro di voler eliminare ${title}`);
            
            if(result) this.submit;
        });
      });
  </script>
@endsection --}}