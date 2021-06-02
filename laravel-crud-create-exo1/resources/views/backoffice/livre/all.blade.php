@extends('layouts.app')

@section('content')
    @include('partial.nav')

    <section class="container">
        
        <h1>tableau de livre</h1>
        <a class="btn btn-success text-white" href="/livre/create">Create</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Auteur</th>
                <th scope="col">Date de parution</th>
                <th scope="col">Nombre de Page</th>
                <th scope="col">Version mobile</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($livre as $livre)
                    <tr>
                        <th scope="row">{{ $livre->id }}</th>
                        <td>{{ $livre->titre }}</td>
                        <td>{{ $livre->auteur }}</td>
                        <td>{{ $livre->date }}</td>
                        <td>{{ $livre->page }}</td>
                        @if ($livre->mobile === 0)
                            <td>oui</td>
                        @else
                            <td>non</td>
                        @endif
                        <td class="d-flex">
                            <a class="btn btn-primary text-white" href="/livre/{{ $livre->id }}/edit">Edit</a>
                            <form action="/livre/{{ $livre->id }}/delete" method="POST">
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

    
