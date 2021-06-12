@extends('layouts.appFront')

@section('content')
@include('layouts.navigation')



    <div id="" class="services"  >
        <div class="max-w-6xl mx-auto  flex justify-center my-10 apparition1">
            <a class="backoffice_btn text-white font-semibold py-2 px-4 rounded shadow hover:bg-purple-800" href="/service/create">+ Create</a>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                @foreach ($services as $service)
                        <div class="mycard icon-box {{ $service->color }} shadow-lg">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                {!! $service->shape !!}
                                </svg>
                                <i class="{{ $service->icon }}"></i>
                            </div>
                            <h4><a href="">{{ $service->title }}</a></h4>
                            <p>{{ $service->text }}</p>
                            <div class="buttons flex justify-center">
                                @can('update', $service)
                                    <a href="{{route('service.edit',$service->id) }}" class="backoffice_btn px-2 rounded-lg m-2 text-center mb-2">Edit</a>
                                @endcan
                                @can('delete', $service)
                                    <form action="{{ route('service.destroy',$service->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="backoffice_delete_btn bg-red-500 text-white px-1 rounded-lg m-2 w-auto text-center">Delete</button>
                                    </form>
                                @endcan
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </div>


    <!--Section Service-->
    {{-- <div class="py-12">
        <h2 class="backoffice_title text-center text-white py-3 mx-10 text-4xl font-light rounded-lg shadow-lg apparition1">Section Service</h2>
        <div class="max-w-6xl mx-auto  flex justify-center my-10 apparition1">
            <a class="backoffice_btn text-white font-semibold py-2 px-4 rounded shadow hover:bg-purple-800" href="/service/create">+ Create</a>
        </div>
        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">

            <!--Card-->
            @foreach ($services as $service)
                <div class="rounded overflow-hidden shadow-lg apparition services">
                    <div class="icon-box {{ $service->color }} ">
                        <div class="icon">
                            <svg width="100" height="100" style="fill: #A3B0BC;" viewBox="0 0 600 600"
                                xmlns="http://www.w3.org/2000/svg">
                                {!! $service->shape !!}
                            </svg>
                            <div class="icon-box iconbox-orange {{ $service->color }}">
                                <div class="icon">
                                    <i class="{{ $service->icon }} {{ $service->color }}" style=""></i>
                                </div>
                            </div>     
                        </div>
                    </div>
                        <div class="font-bold text-xl mb-2 text-center">{{ $service->title }}</div>
                        <p class="text-gray-700 text-base">
                            {{ $service->text }}
                        </p>
                        
                        <a href="{{route('service.edit',$service->id) }}" class="text-center border-2 bg-blue-500 hover:bg-blue-800 text-white hover:border-blue-500 px-2 rounded-lg m-2 w-auto text-center mb-2 hover:border-blue-500 hover:text-blue-500">Edit</a>
                        <form action="{{ route('service.destroy',$service->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="text-center border-2 bg-pink-500 hover:bg-pink-800 text-white hover:border-pink-500 px-1 rounded-lg m-2 w-auto text-center mb-2 hover:border-pink-500 hover:text-pink-500">Delete</button>
                        </form>
                </div>
            @endforeach

        </div>
    </div> --}}
@endsection