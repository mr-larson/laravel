@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')
    <!--Section portfolios-->
    <section id="" class="services my-3">
        <div class="section-title container" data-aos="fade-up">
            <h2>{{ $titres[3]->h2 }}</h2>
            <p>{{ $titres[3]->p }}</p>
            <br>
            <a href="#" class="bg-white rounded p-1">Edit <i class="bx bx-chevron-right"></i></a>
        </div>
        @can('create', App\models\portfolio::class)
        <div class="max-w-6xl mx-auto  flex justify-center my-2" data-aos="fade-up">
            <a class="font-semibold py-2 px-4 rounded shadow icon-box" href="/portfolio/create">+ Create</a>
        </div>
         @endcan
        <div class="container" data-aos="fade-up" data-aos-delay="50">
            <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-5">
                @foreach ($portfolios as $portfolio)
                        <div class="icon-box {{ $portfolio->id }} shadow-lg">
                            <div class="">
                                <img class="w-full" src="{{asset("img/" . $portfolio->img) }}" alt="img">
                            </div>
                            <h4>{{ $portfolio->h4 }}</h4>
                            <p>{{ $portfolio->p }}</p>
                            <div class="buttons flex justify-center">
                                @can('update', $portfolio)
                                    <a href="{{route('portfolio.edit',$portfolio->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                                @endcan
                                @can('delete', $portfolio)
                                    <form action="{{ route('portfolio.destroy',$portfolio->id) }}" method="POST">
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
        <div class="flex justify-center" data-aos="fade-up" data-aos-delay="150">{{ $portfolios->links() }}</div>
    </section>
@endsection






            
