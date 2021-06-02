@extends('layouts.app')

@section('content')
    @include('partial.nav')

    <section class="container">
        
        <h1>tableau de image</h1>
        <a class="btn btn-success text-white" href="/image/create">Create</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Photo</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($image as $image)
                    <tr>
                        <th scope="row">{{ $image->id }}</th>
                        <td>{{ $image->photo }}</td>
                        <td>{{ $image->description }}</td>
                        <td class="d-flex">
                            <a class="btn btn-primary text-white" href="/image/{{ $image->id }}/edit">Edit</a>
                            <form action="/image/{{ $image->id }}/delete" method="POST">
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

    
