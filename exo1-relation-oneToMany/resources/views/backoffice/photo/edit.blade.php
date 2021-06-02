@extends('layout.app')

@section('content')
  
    <section class="container">

        <h1 class="text-center my-5 text-light">Edit photo</h1>

        <ul class="bg-danger rounded">
        
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
            
        </ul>

        <form method="POST" action="{{ route('photo.update',$photo->id) }}" enctype="multipart/form-data">
            @csrf
            @method("put")
            <div class="mb-3">
                <label  class="form-label text-light">nom</label>
                <input type="text" class="form-control" value="{{ $photo->nom }}" name="nom">
            </div>
            <div class="mb-3">
                <label  class="form-label text-light">image</label>
                <input type="file" class="form-control" value="{{ $photo->image }}" name="image">
            </div>
            <div class="mb-3">
                <label class="form-label text-light">categorie</label> 
                <select class="custom-select rounded mx-4 p-2"  name="categorie" value="{{ $photo->categorie }}">
                    <option selected>choisissez une categorie</option>
                    <option value="item1">item 1</option> 
                    <option value="item2">item 2</option>
                    <option value="item3">item 3</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label text-light">description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $photo->description }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label text-light">album</label>
                <select class="custom-select rounded mx-4 p-2" name="album_id">
                    @foreach ($albums as $album)
                        <option value={{ $album->id }}>{{ $album->nom }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-secondary text-white my-3">Submit</button>
            
        </form>
      
    </section>

@endsection