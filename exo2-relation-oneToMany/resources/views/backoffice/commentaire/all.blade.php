@extends('layout.app')

@section('content')
    @include('partial.nav')
        
    <section class="container mr-5 section">
        
        <h1 class="text-center my-3 text-white">tableau de commentaires</h1>
        
        <a class="btn btn-secondary text-white my-2" href="/commentaire/create">Create</a>

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
                <th scope="col">email</th>
                <th scope="col">description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="col-6">
                @foreach ($commentaires as $commentaire)
                    <tr>
                        <th scope="row">{{ $commentaire->id }}</th>
                        <td class="col-3">{{ $commentaire->nom }}</a></td>
                        <td class="col-3"><a href=" {{ route('commentaire.show', $commentaire->id) }}"><img class="img-thumbnail col-4" src="{{ asset("img/" . $commentaire->image) }}" alt=""></td>
                        <td>{{ $commentaire->categorie }}</td>
                        <td>{{ $commentaire->description }}</td>
                        <td class="col-3">{{ $commentaire->album->nom }}</td>
                        <td class="col-3">
                            <div class="d-flex">
                                <form action="/commentaire/{{ $commentaire->id }}/download" method="POST">
                                    @csrf
                                    <button class="btn btn-secondary text-white mx-2" type="submit">Download</button>
                                </form>
                                <a class="btn btn-secondary text-white mx-2" href="{{route('commentaire.edit',$commentaire->id) }}">Edit</a>
                                <form action="{{ route('commentaire.destroy',$commentaire->id) }}" method="POST">
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
        <div>{{ $commentaires->links() }}</div>
           
    </section>

@endsection