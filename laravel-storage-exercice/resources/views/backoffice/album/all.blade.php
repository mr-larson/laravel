@extends('layout.app')

@section('content')
    @include('partial.nav')
        
    <section class="container mr-5">
        
        <h1 class="text-center my-3">tableau de Albums</h1>
        
        <a class="btn btn-secondary text-white my-2" href="/album/create">Create</a>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="col-6">
                @foreach ($album as $album)
                    <tr>
                        <th scope="row">{{ $album->id }}</th>
                        <td>{{ $album->nom }}</td>
                        <td>{{ $album->description }}</td>
                        <td class="d-flex">
                            <a class="btn btn-primary text-white" href="/album/{{ $album->id }}/edit">Edit</a>
                            <form action="/album/{{ $album->id }}/delete" method="POST">
                                @csrf
                                <button class="btn btn-danger text-white mx-2" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
           
    </section>

    @include('partial.footer')
@endsection