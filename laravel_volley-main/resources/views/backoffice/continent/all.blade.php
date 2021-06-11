@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <p class="text-3xl text-center text-blue-600 my-10 bg-gray">Tous les continents</p>


    @foreach ($continents as $continent)
    <div class="equipe my-2">
        {{-- <p class="text-center">{{ $equipe->club }}</p> --}}
    </div>
    {{-- "club",
    "ville",
    "pays",
    "max_joueurs",
    "continent_id", --}}
    @endforeach

@endsection
