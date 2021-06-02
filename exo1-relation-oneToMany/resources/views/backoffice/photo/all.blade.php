@extends('layout.app')

@section('content')
    @include('partial.nav')
        
    <section class="container mr-5 section">
        
        <h1 class="text-center my-3 text-white">tableau de photos</h1>
        
        <a class="btn btn-secondary text-white my-2" href="/photo/create">Create</a>

        @if (session("message"))
            <div class="alert alert-success">
                {{ session("message") }}
            </div>

        @endif

        <table class="table text-white">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">image</th>
                <th scope="col">categorie</th>
                <th scope="col">description</th>
                <th scope="col">album</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="col-6">
                @foreach ($photos as $photo)
                    <tr>
                        <th scope="row">{{ $photo->id }}</th>
                        <td class="col-3">{{ $photo->nom }}</a></td>
                        <td class="col-3"><a href=" {{ route('photo.show', $photo->id) }}"><img class="img-thumbnail col-4" src="{{ asset("img/" . $photo->image) }}" alt=""></td>
                        <td>{{ $photo->categorie }}</td>
                        <td>{{ $photo->description }}</td>
                        <td class="col-3">{{ $photo->album->nom }}</td>
                        <td class="col-3">
                            <div class="d-flex">
                                <form action="/photo/{{ $photo->id }}/download" method="POST">
                                    @csrf
                                    <button class="btn btn-secondary text-white mx-2" type="submit">Download</button>
                                </form>
                                <a class="btn btn-secondary text-white mx-2" href="{{route('photo.edit',$photo->id) }}">Edit</a>
                                <form action="{{ route('photo.destroy',$photo->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger text-white mx-2" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>{{ $photos->links() }}</div>
           
    </section>

@endsection