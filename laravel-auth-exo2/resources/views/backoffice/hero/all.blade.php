@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')
    <!--Section Hero-->
    <div class="py-12">
        {{-- <h2 class="backoffice_title text-center text-white py-3 mx-10 text-4xl font-light rounded-lg shadow-lg apparition1">Héros</h2> --}}
       @can('create', App\models\Hero::class)
            <div class="max-w-6xl mx-auto  flex justify-center my-10">
                <a class="backoffice_btn text-white font-semibold py-2 px-4 rounded shadow" href="/hero/create">Nouveau héro</a>
            </div>
       @endcan
        <div class="grid grid-cols-1 gap-5 mx-auto apparition1">
            <!--Card-->
            @foreach ($heros as $hero)
                <div class="rounded overflow-hidden shadow-lg px-6 py-4" style="background: linear-gradient(45deg, rgba(86, 58, 250, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%), url('{{ asset('img/hero-bg.jpg') }}'); background-size: cover;">
                        <div class="titre_overview">
                            <p class="text-white opacity-60 text-center">Titre</p>
                            <p class="text-white text-base text-center pb-6 text-3xl">
                                {{ $hero->h1 }}
                            </p>
                        </div>
                        <div class="text_overview">
                            <p class="text-white opacity-60 text-center">Texte</p>
                            <p class="text-white text-base text-center text-lg">
                                {{ $hero->h2 }}
                            </p>
                        </div>
              
                        <div class="picture_overview my-8" >
                            <img src="{{ asset("img/" . $hero->image) }}" alt="" id="preview_link">
                        </div>

                        {{-- //bien se rappeler qu'il faut utiliser des antislash --}}
                        <div class="admin_btns">
                                {{-- // ici c'est pareille que pour les policy, 
                                // s'il y a une id il faut passer l'id sinon on passe la classe --}}
                                @can('update', $hero)
                                    <a href="{{route('hero.edit',$hero->id) }}" class="backoffice_btn bg-white text-center mb-2 mx-4 hover:border-blue-500 hover:text-blue-500" style="color: #6741EF">Éditer</a>
                                @endcan
                            </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection






            
