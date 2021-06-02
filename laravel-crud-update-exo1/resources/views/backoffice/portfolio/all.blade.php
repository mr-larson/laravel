@extends('layouts.app')

@section('content')
    @include('partial.nav')

    <section class="container bg-warning">
        
        <h1>tableau de portfolio</h1>
        <a class="btn btn-success" href="/portfolio/create">Create</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">titre</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($portfolio as $portfolio)
                    <tr>
                        <th scope="row">{{ $portfolio->id }}</th>
                        <td>{{ $portfolio->titre }}</td>
                        <td>{{ $portfolio->description }}</td>
                        <td class="d-flex">
                            <a class="btn btn-primary text-white" href="/portfolio/{{ $portfolio->id }}/edit">Edit</a>
                            <form action="/portfolio/{{ $portfolio->id }}/delete" method="POST">
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

    
