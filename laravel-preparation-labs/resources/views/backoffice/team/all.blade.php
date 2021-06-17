@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')
    <!--Section teams-->
    <section id="" class="services my-3">
        <div class="section-title container"data-aos="fade-up">
            <h2>{{ $titres[5]->h2 }}</h2>
            <p>{{ $titres[5]->p }}</p>
            <br>
            <a href="#" class="bg-white rounded p-1">Edit <i class="bx bx-chevron-right"></i></a>
        </div>
        @can('create', App\models\Team::class)
        <div class="max-w-6xl mx-auto  flex justify-center my-2" data-aos="fade-up">
            <a class="font-semibold py-2 px-4 rounded shadow icon-box" href="/team/create">+ Create</a>
        </div>
         @endcan
        <div class="container" data-aos="fade-up" data-aos-delay="50">
            <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-5">
                @foreach ($teams as $team)
                        <div class="icon-box {{ $team->id }} shadow-lg">
                            <div class="">
                                <img class="w-full" src="{{asset("img/". $team->img) }}" alt="img">
                            </div>
                            <div class="member-info-content pt-2">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                            </div>
                            <div class="pt-2">
                                <span><i class="bi bi-twitter"></i>{{ $team->twitter }}</span>
                                <span><i class="bi bi-facebook"></i>{{ $team->facebook }}</span>
                                <span><i class="bbi bi-instagram"></i>{{ $team->insta }}</span>
                                <span><i class="bi bi-linkedin"></i>{{ $team->link }}</span>
                            </div>  
                            <div class="buttons flex justify-center">
                                @can('update', $team)
                                    <a href="{{route('team.edit',$team->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                                @endcan
                                @can('delete', $team)
                                    <form action="{{ route('team.destroy',$team->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 hover:bg-red-600 text-white px-1 rounded-lg m-2 w-auto text-center">Delete</button>
                                    </form>
                                @endcan
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection






            
