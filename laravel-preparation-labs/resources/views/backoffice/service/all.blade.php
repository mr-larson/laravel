@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')
    <!--Section services-->
    <section id="services" class="services my-3">
        @can('create', App\models\Service::class)
        <div class="max-w-6xl mx-auto  flex justify-center my-2">
            <a class="font-semibold py-2 px-4 rounded shadow icon-box" href="/service/create">+ Create</a>
        </div>
         @endcan
        <div class="container" data-aos="fade-up">
            <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-5">
                @foreach ($services as $service)
                        <div class="icon-box {{ $service->id }} shadow-lg">
                            <div class="icon">
                                <i class="{{ $service->icon }}"></i>
                            </div>
                            <h4>{{ $service->title }}</h4>
                            <p>{{ $service->description }}</p>
                            <div class="buttons flex justify-center">
                                @can('update', $service)
                                    <a href="{{route('service.edit',$service->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                                @endcan
                                @can('delete', $service)
                                    <form action="{{ route('service.destroy',$service->id) }}" method="POST">
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






            
