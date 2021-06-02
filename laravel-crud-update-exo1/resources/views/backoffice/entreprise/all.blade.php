@extends('layouts.app')

@section('content')
    @include('partial.nav')

    <section class="container bg-warning">
        
        <h1>tableau de entreprise</h1>
        <a class="btn btn-success" href="/entreprise/create">Create</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($entreprise as $entreprise)
                    <tr>
                        <th scope="row">{{ $entreprise->id }}</th>
                        <td>{{ $entreprise->nom }}</td>
                        <td>{{ $entreprise->description }}</td>
                        <td class="d-flex">
                            <a class="btn btn-primary text-white" href="/entreprise/{{ $entreprise->id }}/edit">Edit</a>
                            <form action="/entreprise/{{ $entreprise->id }}/delete" method="POST">
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

    
