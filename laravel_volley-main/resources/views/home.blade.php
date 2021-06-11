@extends('layouts.app')

@section('content')
    @include('partials.nav')
   
    {{-- ///// EQUIPES COMPLETES ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
    <section id="equipes_completes" class="home_section">
        <div class="text-center text-blue-600 text-3xl">
            <i class="fas fa-fire home-icon"></i>
        </div>
        <h2 class="home-title">Ready to Roll</h2>
        <h3 class="home-subtitle">Les équipes complètes et prêtes à combattre</h3>

        <div id="section_container" class="lg:max-w-screen-2xl mx-auto  grid  lg:grid-cols-4 md:grid-cols-2  grid gap-5 my-4 ">
            {{-- {{ $equipes::random(2)}}
           {{  dd($equipes)}} --}}
            @foreach ($equipes as $equipe)
                @if (count($equipe->joueurs) >= 6 && $equipe->club != "aucun" )
                <div class="equipe bg-white py-4 px-8 shadow-md">
                    <div class="flex justify-center ">
                        <img src="{{ asset("img/clubs/" . $equipe->logo) }}" class="w-1/2" alt="">
                    </div>
                    <h2 class="text-center text-3xl text-blue-600 club">{{ $equipe->club }} </h2>
                    <p class="text-center text-blue-600 pb-5">{{ $equipe->ville }} </p>
                    <p class="text-center "><i class="fas fa-globe-americas text-sm text-blue-600"></i> {{ $equipe->pays }} — {{ $equipe->continent->continent }}</p>
                    <p class="text-center"><span class="text-gray-400">Max players : </span>{{ $equipe->max_joueurs }}</p>
                </div>
                @endif
            @endforeach
        </div>
    </section>


    {{-- ///// EQUIPES INCOMPLETES  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
    <section id="equipes_incompletes" class="home_section">
        <div class="text-center text-red-600 text-3xl">
            <i class="fas fa-hourglass-half home-icon"></i>
        </div>
        <h2 class="home-title">Les incomplètes </h2>
        <h3 class="home-subtitle">Sélection de 4 équipes bientôt sur le pied de guerre</h3>

        <div id="section_container" class="lg:max-w-screen-2xl mx-auto  grid  lg:grid-cols-4 md:grid-cols-2  grid gap-5 my-4 ">
            @php
                $j=0 
            @endphp
            @foreach ($equipes as $equipe)
                @if (count($equipe->joueurs) < 6 && $j<4 && $equipe->club !="aucun" )
                <div class="equipe bg-white py-4 px-8 shadow-md border-b-8 border-red-500">
                    <div class="flex justify-center ">
                        <img src="{{ asset("img/clubs/" . $equipe->logo) }}" class="w-1/2" alt="">
                    </div>
                    <h2 class="text-center text-3xl text-red-500 club">{{ $equipe->club }} </h2>
                    <p class="text-center text-red-500 pb-5">{{ $equipe->ville }} </p>
                    <p class="text-center "><i class="fas fa-globe-americas text-sm text-red-500"></i> {{ $equipe->pays }} — {{ $equipe->continent->continent }}</p>
                    <p class="text-center"><span class="text-gray-400">Max players : </span>{{ $equipe->max_joueurs }}</p>
                </div>
                    @php
                        $j++
                    @endphp
                @endif

            @endforeach
        </div>
    </section>

    {{-- ///// AVAILABLE PLAYER  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
    <section id="joueurs_disponible" class="home_section">
        <div class="text-center text-yellow-400 text-3xl">
            <i class="fab fa-angellist home-icon"></i>
        </div>
        <h2 class="home-title">Recrutez-les</h2>
        <h3 class="home-subtitle">Sélection de 4 game-changers disponibles</h3>

        <div id="section_container" class="lg:max-w-screen-2xl mx-auto  grid  lg:grid-cols-4 md:grid-cols-2  grid gap-5 my-4 ">
            @php
                $a = 0
            @endphp
            @foreach ($joueurs_free as $joueur)
                @if ($a<4)
                    <div class="card">
                        <div class="img">
                            <img src="{{ asset("img/players/" . $joueur->photo->image) }}" alt="">
                        </div>
                        <div class="content px-4">
                            <h2 class="text-center text-yellow-400">{{ $joueur->nom }} - {{ $joueur->prenom }}</h2>
                            <p class="text-center">{{ $joueur->phone }}</p>
                            <p class="text-center">{{ $joueur->email }}</p>
                            <p class="text-center">{{ $joueur->age }}</p>
                            <p class="text-center">{{ $joueur->genre->genre }}</p>
                            <p class="text-center">{{ $joueur->origine }}</p>
                            <p class="text-center">{{ $joueur->role->poste }}</p>
                            <p class="text-center">{{ $joueur->equipe->club }}</p>
                        </div>
                    </div>
                @endif
            @php
                $a++
            @endphp
        @endforeach
        </div>
    </section>


    {{-- ///// 4 PLAYER EN EQUIPE AU HASARD  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
    <section id="joueurs_en_equipe" class="home_section">
        <div class="text-center text-yellow-500 text-3xl">
            <i class="far fa-calendar-check home-icon"></i>
        </div>
        <h2 class="home-title">Les Superstars déja prises</h2>
        <h3 class="home-subtitle">Sélection de 4 game-changers indisponibles</h3>
        
        <div id="section_container" class="lg:max-w-screen-2xl mx-auto  grid  lg:grid-cols-4 md:grid-cols-2  grid gap-5 my-4 ">
            @php
                $i=0 
            @endphp
            
            @foreach ($joueurs_equipe as $joueur)
            @if ($i<4)
            <div class="card">
                <div class="img">
                    <img src="{{ asset("img/players/" . $joueur->photo->image) }}" alt="">
                </div>
                <div class="content px-4">
                    <h2 class="text-center text-red-500">{{ $joueur->nom }} - {{ $joueur->prenom }}</h2>
                    <p class="text-center">{{ $joueur->phone }}</p>
                    <p class="text-center">{{ $joueur->email }}</p>
                    <p class="text-center">{{ $joueur->age }}</p>
                    <p class="text-center">{{ $joueur->genre->genre }}</p>
                    <p class="text-center">{{ $joueur->origine }}</p>
                    <p class="text-center">{{ $joueur->role->poste }}</p>
                    <p class="text-center">{{ $joueur->equipe->club }}</p>
                </div>
            </div>
            @php
                        $i++
                        @endphp
                @endif
                @endforeach
            </div>
        </section>


        {{-- ///// EUROPEAN TEAMS  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        <section id="equipes_europe" class="home_section">
            <div class="text-center text-3xl">
                <i class="fas fa-star home-icon"></i>
                <i class="fas fa-star home-icon"></i>
                <i class="fas fa-star home-icon"></i>
                <i class="fas fa-star home-icon"></i>
                <i class="fas fa-star home-icon"></i>
            </div>
            <h2 class="home-title">Les Européenes </h2>
            <h3 class="home-subtitle">Sélection de 4 équipes européennes</h3>
    
            <div id="section_container" class="lg:max-w-screen-2xl mx-auto grid  lg:grid-cols-4 md:grid-cols-2  grid gap-5 my-4 ">
                {{-- @for ($k = 0; $k < 4; $k++) --}}
                @php
                    $k = 0
                @endphp
                @foreach ($equipes_europe as $equipe)
                    @if ($equipe->club !="aucun" && $k<4)
                            <div class="equipe bg-white border-b-8 border-blue-600  py-4 px-8 shadow-md">
                               <div class="flex justify-center ">
                                    <img src="{{ asset("img/clubs/" . $equipe->logo) }}" class="w-1/2" alt="">
                                </div>
                                <h2 class="text-center text-3xl text-blue-600 club">{{ $equipe->club }} </h2>
                                <p class="text-center text-blue-600 pb-5">{{ $equipe->ville }} </p>
                                <p class="text-center "><i class="fas fa-globe-americas text-sm text-blue-600"></i> {{ $equipe->pays }} — {{ $equipe->continent->continent }}</p>
                                <p class="text-center"><span class="text-gray-400">Max players : </span>{{ $equipe->max_joueurs }}</p>
                            </div>    

                        @php
                            $k++
                        @endphp
                    @endif
                @endforeach
            </div>
        </section>



        {{-- ///// JOUEUSES  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        <section id="joueuses_5" class="home_section">
            <div class="text-center text-yellow-500 text-3xl">
                <i class="far fa-calendar-check home-icon"></i>
            </div>
            <h2 class="home-title">Women 5</h2>
            <h3 class="home-subtitle">Sélection de 5 joueuses au hasard</h3>
            
            <div id="section_container" class="lg:max-w-screen-2xl mx-auto  grid  lg:grid-cols-4 md:grid-cols-2  grid gap-5 my-4 ">
                @php
                    $i=0 
                @endphp
                
                @foreach ($joueurs_equipe as $joueur)
                    @if ($i<4 && $joueur->genre->genre == "Female")
                        <div class="card">
                            <div class="img">
                                <img src="{{ asset("img/players/" . $joueur->photo->image) }}" alt="">
                            </div>
                            <div class="content px-4">
                                <h2 class="text-center text-red-500">{{ $joueur->nom }} - {{ $joueur->prenom }}</h2>
                                <p class="text-center">{{ $joueur->phone }}</p>
                                <p class="text-center">{{ $joueur->email }}</p>
                                <p class="text-center">{{ $joueur->age }}</p>
                                <p class="text-center text-red-500">{{ $joueur->genre->genre }}</p>
                                <p class="text-center">{{ $joueur->origine }}</p>
                                <p class="text-center">{{ $joueur->role->poste }}</p>
                                <p class="text-center">{{ $joueur->equipe->club }}</p>
                            </div>
                        </div>
                        @php
                            $i++
                        @endphp
                    @endif
                @endforeach
            </div>
        </section>



        {{-- ///// 5 JOUEURS  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        <section id="joueurs_5" class="home_section">
            <div class="text-center text-yellow-500 text-3xl">
                <i class="far fa-calendar-check home-icon"></i>
            </div>
            <h2 class="home-title">Masculine 5</h2>
            <h3 class="home-subtitle">Sélection de 5 joueurs au hasard</h3>
            
            <div id="section_container" class="lg:max-w-screen-2xl mx-auto  grid  lg:grid-cols-4 md:grid-cols-2  grid gap-5 my-4 ">
                @php
                    $i=0 
                @endphp
                
                @foreach ($joueurs_equipe as $joueur)
                    @if ($i<4 && $joueur->genre->genre == "Male")
                        <div class="card">
                            <div class="img">
                                <img src="{{ asset("img/players/" . $joueur->photo->image) }}" alt="">
                            </div>
                            <div class="content px-4">
                                <h2 class="text-center text-blue-500">{{ $joueur->nom }} - {{ $joueur->prenom }}</h2>
                                <p class="text-center">{{ $joueur->phone }}</p>
                                <p class="text-center">{{ $joueur->email }}</p>
                                <p class="text-center">{{ $joueur->age }}</p>
                                <p class="text-center text-blue-500">{{ $joueur->genre->genre }}</p>
                                <p class="text-center">{{ $joueur->origine }}</p>
                                <p class="text-center">{{ $joueur->role->poste }}</p>
                                <p class="text-center">{{ $joueur->equipe->club }}</p>
                            </div>
                        </div>
                        @php
                            $i++
                        @endphp
                    @endif
                @endforeach
            </div>
        </section>
        
@endsection
        
        



