@extends('layouts.app')

@section('content')
    @include('partial.nav')

    <section class="container bg-warning">
        
        <h1>tableau de article</h1>
        <a class="btn btn-success" href="/article/create">Create</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Auteur</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($article as $article)
                    <tr>
                        <th scope="row">{{ $article->id }}</th>
                        <td>{{ $article->nom }}</td>
                        <td>{{ $article->description }}</td>
                        <td>{{ $article->auteur }}</td>
                        <td class="d-flex">
                            <a class="btn btn-primary text-white" href="/article/{{ $article->id }}/edit">Edit</a>
                            <form action="/article/{{ $article->id }}/delete" method="POST">
                                @csrf
                                <button class="btn btn-danger text-white" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
           
    </section>
    
    @include('partial.footer')
@endsection

    
