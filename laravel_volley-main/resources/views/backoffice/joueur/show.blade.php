@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <p class="text-center text-blue-600 title">{{$joueur->nom }} - {{ $joueur->prenom }}</p>

    <section class="max-w-6xl mx-auto text-center bg-yellow-200 rounded shadow-lg p-3 w-2/5">
       
        <div class="bg-red-400 rounded shadow-lg mx-auto p-3 w-3/5">
            <img src="{{ asset("img/players/" . $joueur->photo->image) }}" alt="">
        </div>
        <p class="text-blue-600 italic font-semibold">Phone number: {{ $joueur->phone }}</p>
        <p class="text-blue-600 italic font-semibold">Email: {{ $joueur->email }}</p>
        <p class="text-blue-600 italic font-semibold">Genre: {{ $joueur->genre->genre }}</p>
        <p class="text-blue-600 italic font-semibold">Origine: {{ $joueur->origine }}</p>
        <p class="text-blue-600 italic font-semibold">Poste: {{ $joueur->role->poste }}</p>
        <p class="text-blue-600 italic font-semibold">Club: {{ $joueur->equipe->club }}</p>
        
        
        <a href="{{ route("joueur.index") }}" class="text-red-600 font-semibold m-2">< Retour aux joueurs</a>

@endsection