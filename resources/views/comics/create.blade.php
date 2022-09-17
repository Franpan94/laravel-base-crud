@extends('layouts.main')

@section('main-content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        @include('comics.form.editcreate', [
          'routename'=>'comics.store',
          'method'=>'POST',
        ])
      </div>
    </div>
  </div>
@endsection
