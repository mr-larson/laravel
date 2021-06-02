@extends('layout.app')

@section('content')
    <section class="container">

        <h1 class="text-center my-5 text-light">Create article</h1>
      
        <ul class="bg-danger rounded">
        
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        
        </ul>

        <form method="POST" action="{{route("article.store") }}" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label class="form-label text-light">Nom</label>
                <input type="text" class="form-control" name="nom">
            </div>
            
            <div class="mb-3">
                <label  class="form-label text-light">description</label> 
                <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-secondary text-white my-3">Submit</button>
            
        </form>
        
    </section>

@endsection

