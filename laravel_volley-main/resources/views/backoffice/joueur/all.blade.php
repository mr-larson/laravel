@extends('layouts.app')

@section('content')

    @include('partials.nav')
    <h2 class="title">Tous les joueurs</h2>
    
    @if (session("message"))
    <div class="alert">
        {{ session("message") }}
    </div>
    @endif

    <div class="max-w-6xl mx-auto  flex justify-center mt-10">
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded" href="/joueur/create"><i class="fas fa-plus"></i> Create</a>
    </div>
    <section class="container max-w-6xl mx-auto grid md:grid-cols-3 grid gap-5 ">
        @foreach ($joueurs as $joueur)
            <div class="card">
                <div class="img">
                    <img src="{{ asset("img/players/" . $joueur->photo->image) }}" alt="">
                </div>
                <div class="content px-4">
                    <h2 class="text-center text-blue-600">{{ $joueur->nom }} - {{ $joueur->prenom }}</h2>
                    <p class="text-center">{{ $joueur->phone }}</p>
                    <p class="text-center">{{ $joueur->email }}</p>
                    <p class="text-center">{{ $joueur->age }}</p>
                    <p class="text-center">{{ $joueur->genre->genre }}</p>
                    <p class="text-center">{{ $joueur->origine }}</p>
                    <p class="text-center">{{ $joueur->role->poste }}</p>
                    <p class="text-center">{{ $joueur->equipe->club }}</p>
                </div>
                <div class="footer flex justify-center items-start ">
                    <a href="{{route('joueur.show',$joueur->id) }}"class="text-center  border-2 border-blue-600 text-blue-600 px-3 py-2 rounded-full text-white m-1 w-auto text-center"><i class="far fa-eye"></i></a>
                    <a href="{{route('joueur.edit',$joueur->id) }}"class="text-center  border-2 border-yellow-400 text-yellow-400 px-3 py-2 rounded-full text-white m-1 w-auto text-center"><i class="far fa-edit"></i></a>
                    <form action="{{ route('joueur.destroy',$joueur->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-center text-red-600 border-2 border-red-600 px-3 py-2 rounded-full text-white m-1 w-auto text-center"><i class="far fa-trash-alt"></i></button>
                    </form>
                </div>
            </div>
        @endforeach

        <div class="paginate">{{ $joueurs->links() }}</div>
    </section>

@endsection
