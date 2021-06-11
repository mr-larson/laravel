@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <p class="text-center text-blue-600 title">{{ $equipe->club }}</p>

    <section class="max-w-6xl mx-auto text-center bg-yellow-200 rounded shadow-lg p-3 w-2/5">
       
        <div class="bg-red-400 rounded shadow-lg mx-auto p-3 w-3/5">
            <img src="{{ asset("img/clubs/" . $equipe->logo) }}" alt="">
        </div>
        <p class="text-blue-600 italic font-semibold">Ville: {{ $equipe->ville }}</p>
        <p class="text-blue-600 italic font-semibold">Pays: {{ $equipe->pays }}</p>
        
        <p class="text-blue-600 italic font-semibold">Max-players : {{ $equipe->max_joueurs }}</p>
        <p class="text-blue-600 italic font-semibold">continent: {{ $equipe->continent->nom }}</p>
        
        <h4 class="my-5 text-2xl text-blue-600 underline"><i class="fas fa-street-view"></i> Main players</h4>
        @foreach ($equipe->joueurs as $joueur)
        <p class="text-blue-600 italic font-semibold">{{ $joueur->nom }} {{ $joueur->prenom }}</p>
        
        
        @endforeach
        {{-- "ville",
        "pays",
        "max_joueurs",
        "continent_id", --}}
        
        <a href="{{ route("equipe.index") }}" class="text-red-600 font-semibold m-2">< Retour aux équipes</a>
    </section>
    

@endsection
