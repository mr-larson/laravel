@extends('layouts.app')

@section('content')
    @include('partial.nav')
        <section class="index container p-5">

            <h1>Services Subheading</h1>

            @include('partial.banner')

            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card h-100">
                    <img src="./img/surf1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a class="btn btn-primary text-light" href="/" role="button">Home</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="./img/surf2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a class="btn btn-primary text-light" href="/contact" role="button">Contact</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./img/surf3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a class="btn btn-primary text-light" href="/about" role="button">About</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    @include('partial.footer')
@endsection