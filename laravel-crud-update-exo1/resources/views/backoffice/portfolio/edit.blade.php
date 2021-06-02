@extends('layouts.app')

@section('content')
  @include('partial.nav')
    <div class="container">

      <h2>edit portfolio</h2>
      <form method="POST" action="/portfolio/{{ $portfolio->id }}/update">
          @csrf
          <div class="mb-3">
            <label  class="form-label">titre</label>
            <input type="text" class="form-control" value="{{ $portfolio->titre }}" name="titre">
          </div>
          <div class="mb-3">
            <label class="form-label">description</label>
            <textarea class="form-control" id="" cols="30" rows="10" name="description">{{ $portfolio->description }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      
    </div>

  @include('partial.footer')
@endsection