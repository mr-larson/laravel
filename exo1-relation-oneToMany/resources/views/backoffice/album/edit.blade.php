@extends('layout.app')

@section('content')
  
    <section class="container">

        <h1 class="text-center my-5 text-light">Edit album</h1>

        <ul class="bg-danger rounded">
        
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
            
        </ul>

        <form method="POST" action="{{ route('album.update', $album->id) }}" enctype="multipart/form-data">
            @csrf
            @method("put")
            <div class="mb-3">
                <label  class="form-label text-light">nom</label>
                <input type="text" class="form-control" value="{{ $album->nom }}" name="nom">
            </div>
        
            <div class="mb-3">
                <label class="form-label text-light">description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $album->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-secondary text-white my-3">Submit</button>
            
        </form>
      
    </section>

@endsection