@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')
    <!--Section About-->
    <div class="py-12">
        <h2 class="backoffice_title text-center text-white py-3 mx-10 text-4xl font-light rounded-lg shadow-lg apparition1">Abouts</h2>
        @can('create', App\models\About::class)
            <div class="max-w-6xl mx-auto  flex justify-center my-10 apparition1">
                <a class="backoffice_btn text-white font-semibold py-2 px-4 rounded shadow" href="/about/create">Nouveau about</a>
            </div>
        @endcan
        <div class="grid grid-cols-1 gap-5 max-w-6xl mx-auto py-20">

            <!--Card-->
            @foreach ($abouts as $about)
                <div class="rounded overflow-hidden shadow-lg apparition">
                    <div class="px-6 py-4">
                        <p class="text-gray-700 text-base">
                            {{ $about->h3 }}
                        </p>
                        <p class="text-gray-700 text-base">
                            {{ $about->p }}
                        </p>
                        <p class="text-gray-700 text-base">
                            {{ $about->li1 }}
                        </p>
                        <p class="text-gray-700 text-base">
                            {{ $about->li2 }}
                        </p>
                        <p class="text-gray-700 text-base">
                            {{ $about->li3 }}
                        </p>
                        <div class="admin_btns">
                            @can('update', $about)
                                    <a href="{{route('about.edit',$about->id) }}" class="backoffice_btn text-center mb-2 mx-4 hover:border-blue-500 hover:text-blue-500">Edit</a>
                             @endcan
                            {{-- <form action="{{ route('about.destroy',$about->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="text-center border-2 border-red-300 text-red-300 px-2 rounded-lg m-2 w-auto text-center mb-2 hover:border-red-500 hover:text-red-500">Delete</button>
                            </form> --}}
                        </div> 
                    </div> 
                </div>
            @endforeach

        </div>
    </div>
@endsection