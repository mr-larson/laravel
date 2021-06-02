@extends('layouts.app')

@section('content')
    @include('partial.nav')

    <section class="container bg-warning">
        
        <h1>tableau de formations</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($formation as $formation)
                    <tr>
                        <th scope="row">{{ $formation->id }}</th>
                        <td>{{ $formation->nom }}</td>
                        <td class="d-flex">
                            <a class="btn btn-primary text-white" href="/formation/{{ $formation->id }}/edit">Edit</a>
                            <form action="/formation/{{ $formation->id }}/delete" method="POST">
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

    
