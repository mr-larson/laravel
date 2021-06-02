@extends('layouts.app')

@section('content')
    @include('partial.nav')

    <section class="container">
        
        <h1>tableau de bibliotheque</h1>
        <a class="btn btn-success text-white" href="/bibliotheque/create">Create</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($bibliotheque as $bibliotheque)
                    <tr>
                        <th scope="row">{{ $bibliotheque->id }}</th>
                        <td>{{ $bibliotheque->nom }}</td>
                        <td>{{ $bibliotheque->address }}</td>
                        <td>{{ $bibliotheque->phone }}</td>
                        <td class="d-flex">
                            <a class="btn btn-primary text-white" href="/bibliotheque/{{ $bibliotheque->id }}/edit">Edit</a>
                            <form action="/bibliotheque/{{ $bibliotheque->id }}/delete" method="POST">
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
