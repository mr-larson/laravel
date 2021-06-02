@extends('layouts.app')

@section('content')
    @include('partial.nav')

    <section class="container bg-warning">
        
        <h1>tableau de batiments</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Age</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">Genre</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($batiment as $batiment)
                    <tr>
                        <th scope="row">{{ $batiment->id }}</th>
                        <td>{{ $batiment->nom }}</td>
                        <td>{{ $batiment->prenom }}</td>
                        <td>{{ $batiment->age }}</td>
                        <td>{{ $batiment->date }}</td>
                        <td>{{ $batiment->genre }}</td>
                        <td class="d-flex">
                            <a class="btn btn-primary text-white" href="/batiment/{{ $batiment->id }}/edit">Edit</a>
                            <form action="/batiment/{{ $batiment->id }}/delete" method="POST">
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

    
