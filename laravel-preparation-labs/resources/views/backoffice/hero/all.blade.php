@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')
    <!--Section heros-->
    <section id="hero" class="d-flex align-items-center">
        <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up" data-aos-delay="50">
            <h1 class="py-2">{{ $hero->h1 }}</h1>
            <h2 class="py-2">{{ $hero->h2 }}</h2>
            <div class="pb-4">
                <img class="w-full" src="{{ asset('img/hero-img.png') }}" alt="img">
            </div>
            <div class="buttons flex justify-center">
                {{--  @can('update', $hero) --}}
                    <a href="{{route('hero.edit',$hero->id) }}" class="btn-get-started scrollto">Edit</a>
                {{--  @endcan --}}
            </div>
        </div>
    </section>
@endsection
