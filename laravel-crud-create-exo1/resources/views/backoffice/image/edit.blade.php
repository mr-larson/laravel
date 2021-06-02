@extends('layouts.app')

@section('content')
  @include('partial.nav')
    <div class="container">

      <h2>edit image</h2>
      <form method="POST" action="/image/{{ $image->id }}/update">
          @csrf
          <div class="mb-3">
            <label  class="form-label">photo</label>
            <input type="text" class="form-control" value="{{ $image->photo }}" name="photo">
          </div>
          <div class="mb-3">
            <label class="form-label">description</label>
            <textarea class="form-control" id="" cols="30" rows="10" name="description">{{ $image->description }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary text-white">Submit</button>
      </form>
      
    </div>

  @include('partial.footer')
@endsection