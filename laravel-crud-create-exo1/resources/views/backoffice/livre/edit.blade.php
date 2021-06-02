@extends('layouts.app')

@section('content')
  @include('partial.nav')
    <div class="container">

      <h2>edit livre</h2>
      <form method="POST" action="/livre/{{ $livre->id }}/update">
          @csrf
          <div class="mb-3">
            <label  class="form-label">titre</label>
            <input type="text" class="form-control" value="{{ $livre->titre }}" name="nom">
          </div>
          <div class="mb-3">
            <label class="form-label">description</label>
            <textarea class="form-control" id="" cols="30" rows="10" name="auteur">{{ $livre->auteur }}</textarea>
          </div>
          <div class="mb-3">
            <label  class="form-label">date de parution</label>
            <input type="text" class="form-control" value="{{ $livre->date }}" name="date">
          </div>
          <div class="mb-3">
            <label  class="form-label">nombre de page</label>
            <input type="text" class="form-control" value="{{ $livre->page }}" name="page">
          </div>
          <div class="mb-3">
            <label  class="form-label">version mobile</label>
            <input type="text" class="form-control" value="{{ $livre->mobile }}" name="mobile">
          </div>
          <button type="submit" class="btn btn-primary text-white">Submit</button>
      </form>
      
    </div>

  @include('partial.footer')
@endsection