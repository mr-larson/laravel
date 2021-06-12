@extends('layouts.appFront')
@section('content')
    @include('layouts.navigation')
    
    <div class="p-10 grid md:grid-cols-1">
        <div class="rounded overflow-hidden shadow-lg py-12 flex flex-col justify-center align-center items-center text-white apparition1"
        style="background: linear-gradient(
                    45deg, rgba(58, 250, 215, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%), url('{{ asset('img/hero-bg.jpg') }}'); background-size: cover;">
            <h2 class="text-center p-2 text-4xl text-white font-regular">Bienvenue dans l'interface admin</h2>
            <p class="text-center p-2 text-lg text-white opacity-80 font-light">Ici vous aurez accès à la gestions de vos donnés. <br>⚠️⚠️ <u>Attention chaque click entraine des conséquences</u> ⚠️⚠️ </p>
            
            <p class="pt-3  opacity-80">🍬   Pour tout autre renseignement contacter la Team Carambar  🍬</p>
            
            @if (session("message"))
                <p class="alert text-red-400 text-6xl">
                    {{ session("message") }}
                </p>
            @endif
        </div>
    </div>
        <!--Section Counts-->
        <div class="">
            <div class="p-10 grid sm:grid-cols-1 md:grid-cols-3  gap-5 apparition">

                <a href="{{ route('hero.index') }}" class="block ">
                    <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center"
                        style="background: linear-gradient(
                        45deg, rgba(86, 58, 250, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%), url('{{ asset('img/hero-bg.jpg') }}'); background-size: cover;">
                        <p class="text-white text-3xl">Hero Banner </p>
                        <p class="text-white opacity-50 font-light py-3">Gérer le héro</p>
                    </div>
                </a>

                <a href="{{ route('about.index') }}" class="block ">
                    <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center"
                        style="background: linear-gradient(
                        45deg, rgba(86, 58, 250, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%), url('{{ asset('img/hero-bg.jpg') }}'); background-size: cover;">
                        <p class="text-white text-3xl">About</p>
                        <p class="text-white opacity-50 font-light py-3">Gérer la section about</p>
                    </div>
                </a>

                <a href="{{ route('service.index') }}" class="block ">
                    <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center"
                        style="background: linear-gradient(
                        45deg, rgba(86, 58, 250, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%), url('{{ asset('img/hero-bg.jpg') }}'); background-size: cover;">
                        <p class="text-white text-3xl">Services</p>
                        <p class="text-white opacity-50 font-light py-3">Gérer les services</p>
                    </div>
                </a>

                <a href="{{ route('temoignage.index') }}" class="block ">
                    <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center"
                        style="background: linear-gradient(
                                        45deg, rgba(86, 58, 250, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%), url('{{ asset('img/hero-bg.jpg') }}'); background-size: cover;">
                        <p class="text-white text-3xl">Témoignages</p>
                        <p class="text-white opacity-50 font-light py-3">Gérer les témoignages</p>
                    </div>
                </a>

                <a href="{{ route('chiffre.index') }}" class="block ">
                    <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center"
                        style="background: linear-gradient(
                                        45deg, rgba(86, 58, 250, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%), url('{{ asset('img/hero-bg.jpg') }}'); background-size: cover;">
                        <p class="text-white text-3xl">Chiffres</p>
                        <p class="text-white opacity-50 font-light py-3">Gérer les chiffres</p>
                    </div>
                </a>
            </div>
        </div>
@endsection
