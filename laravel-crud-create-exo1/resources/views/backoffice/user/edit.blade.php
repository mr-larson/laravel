@extends('layouts.app')

@section('content')
  @include('partial.nav')
    <div class="container">

      <h2>edit User</h2>
      <form method="POST" action="/user/{{ $user->id }}/update">
          @csrf
          <div class="mb-3">
            <label  class="form-label">nom</label>
            <input type="text" class="form-control" value="{{ $user->nom }}" name="nom">
          </div>
          <div class="mb-3">
            <label class="form-label">prenom</label>
            <input type="text" class="form-control" value="{{ $user->prenom }}" name="prenom">
          </div>
          <div class="mb-3">
            <label  class="form-label">age</label>
            <input type="text" class="form-control" value="{{ $user->age }}" name="age">
          </div>
          <div class="mb-3">
            <label  class="form-label">email</label>
            <input type="text" class="form-control" value="{{ $user->email }}" name="email">
          </div>
          <div class="mb-3">
            <label  class="form-label">mot de passe</label>
            <input type="text" class="form-control" value="{{ $user->password }}" name="password">
          </div>
          <div class="mb-3">
            <label  class="form-label">photo</label>
            <input type="text" class="form-control" value="{{ $user->photo }}" name="photo">
          </div>
          <button type="submit" class="btn btn-primary text-white">Submit</button>
      </form>
      
    </div>

  @include('partial.footer')
@endsection