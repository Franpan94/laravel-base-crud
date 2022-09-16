@extends('layouts.main')

@section('main-content')
    <div class="container">
      <div class="row">
        <div class="col-12">
          @include('comics.form.editcreate', [
            'routename'=>'comics.update',
            'method'=>'PUT'
          ])
        </div>
      </div>
    </div>
@endsection
