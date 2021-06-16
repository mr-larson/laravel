@extends('layouts.appFront')
@section('content')
    {{-- @include('layouts.navigation') --}}
    <x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" data-aos="fade-up">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h2 class="text-center p-2 text-4xl font-regular">Bienvenue dans l'interface admin</h2>
                        <p class="text-center p-2 text-lg opacity-80 font-light">Ici vous aurez accès à la gestions de vos donnés.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 my-3" data-aos="fade-up" data-aos-delay="50">
                    <a href="{{ route('hero.index') }}" class="block ">
                        <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                            <p class="text-white text-3xl">Heroes</p>
                            <p class="text-white opacity-50 font-light py-3">Gérer la section hero</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 my-3" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ route('about.index') }}" class="block ">
                        <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                            <p class="text-white text-3xl">Abouts</p>
                            <p class="text-white opacity-50 font-light py-3">Gérer la section about</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 my-3" data-aos="fade-up" data-aos-delay="150">
                    <a href="{{ route('service.index') }}" class="block ">
                        <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                            <p class="text-white text-3xl">Features</p>
                            <p class="text-white opacity-50 font-light py-3">Gérer la section feature</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 my-3" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('service.index') }}" class="block ">
                        <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                            <p class="text-white text-3xl">Services</p>
                            <p class="text-white opacity-50 font-light py-3">Gérer la section service</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 my-3" data-aos="fade-up" data-aos-delay="250">
                    <a href="{{ route('portfolio.index') }}" class="block ">
                        <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                            <p class="text-white text-3xl">Portfolios</p>
                            <p class="text-white opacity-50 font-light py-3">Gérer la section portfolio</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 my-3" data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ route('testimonial.index') }}" class="block ">
                        <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                            <p class="text-white text-3xl">Testimonials</p>
                            <p class="text-white opacity-50 font-light py-3">Gérer la section testimonial</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 my-3" data-aos="fade-up" data-aos-delay="350">
                    <a href="{{ route('service.index') }}" class="block ">
                        <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                            <p class="text-white text-3xl">Team</p>
                            <p class="text-white opacity-50 font-light py-3">Gérer la section team</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 my-3" data-aos="fade-up" data-aos-delay="400">
                    <a href="{{ route('adresse.index') }}" class="block ">
                        <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                            <p class="text-white text-3xl">Coordonée</p>
                            <p class="text-white opacity-50 font-light py-3">Gérer l'adresse de votre société</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 my-3" data-aos="fade-up" data-aos-delay="450">
                    <a href="{{ route('service.index') }}" class="block ">
                        <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                            <p class="text-white text-3xl">Titres</p>
                            <p class="text-white opacity-50 font-light py-3">Gérer les titres et description de vos sections</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 my-3" data-aos="fade-up" data-aos-delay="450">
                    <a href="{{ route('link.index') }}" class="block ">
                        <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                            <p class="text-white text-3xl">link du footer</p>
                            <p class="text-white opacity-50 font-light py-3">Gérer les liens de votre footer</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </x-app-layout>
@endsection