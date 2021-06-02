@extends('layouts.app')

@section('content')
  @include('partial.nav')
    <div class="container">

      <h2>edit article</h2>
      <form method="POST" action="/article/{{ $article->id }}/update">
          @csrf
          <div class="mb-3">
            <label  class="form-label">nom</label>
            <input type="text" class="form-control" value="{{ $article->nom }}" name="nom">
          </div>
          <div class="mb-3">
            <label class="form-label">description</label>
            <textarea class="form-control" id="" cols="30" rows="10" name="description">{{ $article->description }}</textarea>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">auteur</label>
            <input type="text" class="form-control" value="{{ $article->auteur }}" name="auteur">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>

  @include('partial.footer')
@endsection