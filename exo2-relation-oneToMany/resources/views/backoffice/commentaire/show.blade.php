@extends('layout.app')

@section('content')
    @include('partial.nav')
        
    <section class="container mr-5 ">
        
        <h1 class="text-center text-white my-3">tableau de commentaire</h1>
        <div class="d-flex justify-content-center">
            <img class="w-75  my-3 img-thumbnail show" src="{{ asset("img/" . $commentaire->image) }}" alt="">
        </div>
        
    </section>

@endsection