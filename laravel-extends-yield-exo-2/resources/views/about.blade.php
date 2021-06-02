@extends('layouts.app')

@section('content')
    @include('partial.nav')
        <section class="index container p-5">

            <h1>Welcome Subheading</h1>

            @include('partial.banner')
            
            <div class="card mb-3">
                <div class="row">
                    <div class=" myimg col-6">
                        <img src="./img/surf2.jpg" alt="...">
                    </div>
                    <div class="col-6">
                        <div class="card-body">
                            <h2 class="card-title">About modern school</h2>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus rem sunt assumenda suscipit quo, itaque facere quas dolor. Aut esse doloremque officiis nesciunt, temporibus doloribus quasi aliquid accusamus non consequatur veritatis iure architecto? Nostrum recusandae dolor molestias totam repellendus suscipit!</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @include('partial.footer')
@endsection