@extends('layouts.app')

@section('content')
  
    <div class="container">

      <h2>edit User</h2>
      <form method="POST" action="/user/store">
          @csrf
          <div class="mb-3">
            <label  class="form-label">nom</label>
            <input type="text" class="form-control"  name="nom">
          </div>
          <div class="mb-3">
            <label class="form-label">prenom</label>
            <input type="text" class="form-control" name="prenom">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">age</label>
            <input type="text" class="form-control"  name="age">
          </div>
          <div class="mb-3">
            <label  class="form-label">email</label>
            <input type="text" class="form-control"  name="email">
          </div>
          <div class="mb-3">
            <label  class="form-label">password</label>
            <input type="text" class="form-control"  name="password">
          </div>
          <div class="mb-3">
            <label  class="form-label">photo</label>
            <input type="text" class="form-control"  name="photo">
          </div>
          <button type="submit" class="btn btn-primary text-white">Submit</button>
      </form>
      
    </div>

  @include('partial.footer')
@endsection