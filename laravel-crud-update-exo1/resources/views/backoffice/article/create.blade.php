@extends('layouts.app')

@section('content')
  
    <div class="container">

      <h2>edit article</h2>
      <form method="POST" action="/article/store">
          @csrf
          <div class="mb-3">
            <label  class="form-label">nom</label>
            <input type="text" class="form-control" name="nom">
          </div>
          <div class="mb-3">
            <label class="form-label">description</label>
            <textarea class="form-control" id="" cols="30" rows="10" name="description"></textarea>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">auteur</label>
            <input type="text" class="form-control" name="auteur">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      
    </div>

  @include('partial.footer')
@endsection