@extends('layouts.app')

@section('content')
  @include('partial.nav')
    <div class="container">

      <h2>edit bibliotheque</h2>
      <form method="POST" action="/bibliotheque/{{ $bibliotheque->id }}/update">
          @csrf
          <div class="mb-3">
            <label  class="form-label">nom</label>
            <input type="text" class="form-control" value="{{ $bibliotheque->nom }}" name="nom">
          </div>
          <div class="mb-3">
            <label class="form-label">address</label>
            <input type="text" class="form-control" value="{{ $bibliotheque->address }}" name="address">
          </div>
          <div class="mb-3">
            <label class="form-label">phone</label>
            <input type="text" class="form-control" value="{{ $bibliotheque->phone }}" name="phone">
          </div>
          <button type="submit" class="btn btn-primary text-white">Submit</button>
      </form>
      
    </div>

  @include('partial.footer')
@endsection