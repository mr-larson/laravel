@extends('layout.app')

@section('content')
    @include('partial.nav')
        
    <section class="container">
        
        <h1 class="text-center my-3 text-white">tableau de albums</h1>
        
        <a class="btn btn-secondary text-white my-2" href="/album/create">Create</a>

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
                <th scope="col">description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="col">
                @foreach ($albums as $album)
                    <tr>
                        <th class="col-2" scope="row">{{ $album->id }}</th>
                        <td class="col-3">{{ $album->nom }}</a></td>
                        <td class="col-3">{{ $album->description }}</td>
                        <td class="col-4">
                            <div class="d-flex">
                                <a class="btn btn-secondary text-white mx-2" href={{ route('album.show', $album->id) }}>Show</a>
                                <a class="btn btn-secondary text-white mx-2" href="{{route('album.edit',$album->id) }}">Edit</a>
                                <form action="{{ route('album.destroy',$album->id) }}" method="POST">
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
        <div>{{ $albums->links() }}</div>
           
    </section>

@endsection