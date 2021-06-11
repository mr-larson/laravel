@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <h2 class="title">Toutes les Equipes</h2>
    @if (session("message"))
        <div class="alert">
            {{ session("message") }}
        </div>
    @endif
    <div class="max-w-6xl mx-auto  flex justify-center my-10">
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded" href="/equipe/create"><i class="fas fa-plus"></i> Create</a>
    </div>

    <section class=" lg:max-w-screen-2xl mx-auto  grid  lg:grid-cols-4 md:grid-cols-2  grid gap-5 my-4 ">
        @foreach ($equipes as $equipe)
            <div class="equipe bg-white py-4 px-8 shadow-md">
                {{-- INFO --}}
                <div class="flex justify-center ">
                    <img src="{{ asset("img/clubs/" . $equipe->logo) }}" class="w-1/2" alt="">
                </div>
                <h2 class="text-center text-3xl text-blue-600 club">{{ $equipe->club }} </h2>
                <p class="text-center text-blue-600 pb-5">{{ $equipe->ville }} </p>
                <p class="text-center "><i class="fas fa-globe-americas text-sm text-blue-600"></i> {{ $equipe->pays }} — {{ $equipe->continent->continent }}</p>
                <p class="text-center"><span class="text-gray-400">Max players : </span>{{ $equipe->max_joueurs }}</p>

                {{-- BLOC D'EDITION --}}
                <hr class="my-5">
                <div class="flex justify-center items-start ">
                    <a href="/equipe/{{ $equipe->id }}" class="text-center  border-2 border-blue-600 text-blue-600 px-3 py-2 rounded-full text-white m-1 w-auto text-center"><i class="far fa-eye"></i></a>
                    <a href="/equipe/{{ $equipe->id }}/edit" class="text-center border-2 border-yellow-400 text-yellow-400 px-3 py-2 rounded-full text-white m-1 w-auto text-center"><i class="far fa-edit"></i></a>

                    @if($equipe->club!="aucun")
                        <form action="/equipe/{{ $equipe->id }}" method="post" class="m-0"> 
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-center text-red-600 border-2 border-red-600 px-3 py-2 rounded-full text-white m-1 w-auto text-center"><i class="far fa-trash-alt"></i></button>
                        </form>
                    @endif
                </div>
                {{-- /BLOC D'EDITION --}}
            </div>
        @endforeach
        
        <div class="paginate">{{ $equipes->links() }}</div>
    </section>


@endsection
