@extends('layouts.app')

@section('content')
  @include('partial.nav')

    {{-- <h2>edit eleves</h2>
    <form method="POST" action="/eleve/{{ $eleve->id }}/update">
        @csrf
        <div class="mb-3">
          <label  class="form-label">nom</label>
          <input type="text" class="form-control" value="{{ $eleve->nom }}" name="nom">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">adresse</label>
          <input type="text" class="form-control" value="{{ $eleve->adresse }}" name="adresse">
        </div>
        <div class="mb-3">
            <label class="form-label">description</label>
            <textarea class="form-control" name="" id="" cols="30" rows="10" name="description">{{ $eleve->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> --}}

  @include('partial.footer')
@endsection