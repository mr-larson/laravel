@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')
    <!--Section features-->
    <section id="" class="services my-3">
        @can('create', App\models\Feature::class)
        <div class="max-w-6xl mx-auto  flex justify-center my-2">
            <a class="font-semibold py-2 px-4 rounded shadow icon-box" href="/feature/create">+ Create</a>
        </div>
        @endcan
        <div class="container" data-aos="fade-up">
            <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-5">
                @foreach ($features as $feature)
                        <div class="icon-box {{ $feature->id }} shadow-lg">
                            <div class="p-2">
                                <img class="w-full" src="{{asset("img/" . $feature->img) }}" alt="img">
                            </div>
                            <h3 class="p-2">{{ $feature->h3 }}</h3>
                            <i class="p-2">{{ $feature->i }}</i>
                            <p class="p-2">{{ $feature->p }}</p>
                            <ul class="p-2">
                                <li>{{ $feature->li1 }}</li>
                                <li>{{ $feature->li2 }}</li>
                                <li>{{ $feature->li3 }}</li>
                            </ul>
                            <div class="buttons flex justify-center">
                                @can('update', $feature)
                                    <a href="{{route('feature.edit',$feature->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                                @endcan
                                @can('delete', $feature)
                                    <form action="{{ route('feature.destroy',$feature->id) }}" method="POST">
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






            
