@extends('layout.app')

@section('content')
  
    <section class="container">

        <h1 class="text-center my-3">Edit Album</h1>

        <ul class="bg-danger rounded">
        
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
            
        </ul>

        <form method="POST" action="/album/{{ $album->id }}/update">
            @csrf
            <div class="mb-3">
                <label  class="form-label">nom</label>
                <input type="text" class="form-control" value="{{ $album->nom }}" name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $album->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-secondary text-white my-3">Submit</button>
        </form>
      
    </section>

  @include('partial.footer')
@endsection