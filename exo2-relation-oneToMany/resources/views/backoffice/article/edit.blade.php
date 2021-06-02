@extends('layout.app')

@section('content')
  
    <section class="container">

        <h1 class="text-center my-5 text-light">Edit article</h1>

        <ul class="bg-danger rounded">
        
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
            
        </ul>

        <form method="POST" action="{{ route('article.update', $article->id) }}" enctype="multipart/form-data">
            @csrf
            @method("put")
            <div class="mb-3">
                <label  class="form-label text-light">nom</label>
                <input type="text" class="form-control" value="{{ $article->nom }}" name="nom">
            </div>
        
            <div class="mb-3">
                <label class="form-label text-light">description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $article->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-secondary text-white my-3">Submit</button>
            
        </form>
      
    </section>

@endsection