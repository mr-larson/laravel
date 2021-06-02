@extends('layouts.app')

@section('content')
  @include('partial.nav')
    <div class="container">

      <h2>edit entreprise</h2>
      <form method="POST" action="/entreprise/{{ $entreprise->id }}/update">
          @csrf
          <div class="mb-3">
            <label  class="form-label">nom</label>
            <input type="text" class="form-control" value="{{ $entreprise->nom }}" name="nom">
          </div>
          <div class="mb-3">
            <label class="form-label">description</label>
            <textarea class="form-control" id="" cols="30" rows="10" name="description">{{ $entreprise->description }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      
    </div>

  @include('partial.footer')
@endsection