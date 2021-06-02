@extends('layouts.app')

@section('content')
    @include('partial.nav')
        <section class="index container p-5">

            <h1>Welcome Subheading</h1>

            @include('partial.banner')
            

            <div class="helloCS p-5">
                <h2 class="text-center">Hello Coding School</h2>
                <p class="text-center py-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium incidunt sunt voluptas nemo aperiam sapiente?</p>
                <hr>
                <p class="text-center py-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                <div class="text-center py-2">
                    <a class="btn btn-primary text-light" href="/about" role="button">About</a>
                </div>
            </div>

        </section>
    @include('partial.footer')
@endsection