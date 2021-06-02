@extends('layouts.app')

@section('content')
    @include('partial.nav')

    <section class="container">
        
        <h1>tableau de User</h1>
        <a class="btn btn-success text-white" href="/user/create">Create</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
                <th scope="col">password</th>
                <th scope="col">Photo</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($user as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->nom }}</td>
                        <td>{{ $user->prenom }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->photo }}</td>
                        <td class="d-flex">
                            <a class="btn btn-primary text-white" href="/user/{{ $user->id }}/edit">Edit</a>
                            <form action="/user/{{ $user->id }}/delete" method="POST">
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

    
