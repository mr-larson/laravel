@extends('layouts.app')

@section('content')
  
    <div class="container">

      <h2>edit livre</h2>
      <form method="POST" action="/livre/store">
          @csrf
          <div class="mb-3">
            <label  class="form-label">titre</label>
            <input type="text" class="form-control"  name="titre">
          </div>
          <div class="mb-3">
            <label class="form-label">auteur</label>
            <textarea class="form-control" name="" id="" cols="30" rows="10" name="auteur"></textarea>
          </div>
          <div class="mb-3">
            <label  class="form-label">date de parution</label>
            <input type="text" class="form-control"  name="date">
          </div>
          <div class="mb-3">
            <label  class="form-label">nombre de pages</label>
            <input type="text" class="form-control"  name="page">
          </div>
          <div class="mb-3">
            <label  class="form-label">version mobile</label>
            <input type="text" class="form-control"  name="mobile">
          </div>
          <button type="submit" class="btn btn-primary text-white">Submit</button>
      </form>
      
    </div>

  @include('partial.footer')
@endsection