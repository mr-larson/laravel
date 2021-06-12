@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')

    <!--Section Counts-->
    <div class="py-12">
        <h2 class="backoffice_title text-center text-white py-3 mx-10 text-4xl font-light rounded-lg shadow-lg apparition1">Section Counts</h2>
        @can('create', App\models\Chiffre::class)
            <div class="max-w-6xl mx-auto  flex justify-center my-10 apparition1">
                <a class="backoffice_btn text-white font-semibold py-2 px-4 rounded shadow hover:bg-purple-800" href="/chiffre/create">+ Create</a>
            </div>
           
       @endcan
        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-5">

            <!--Card-->
            @foreach ($chiffres as $chiffre)
                <div class="rounded overflow-hidden shadow-lg apparition">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $chiffre->figure }}</div>
                        <p class="text-gray-700 text-base">
                            {{ $chiffre->text }}
                        </p>
                        @can('update', $chiffre)
                            <a href="{{route('chiffre.edit',$chiffre->id) }}" class="text-center border-2 bg-blue-500 hover:bg-blue-800 text-white hover:border-blue-500 px-2 rounded-lg m-2 w-auto text-center mb-2 hover:border-blue-500 hover:text-blue-500">Edit</a>
                        @endcan
                        @can('delete', $chiffre)
                            <form action="{{ route('chiffre.destroy',$chiffre->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="text-center border-2 bg-pink-500 hover:bg-pink-800 text-white hover:border-pink-500 px-1 rounded-lg m-2 w-auto text-center mb-2 hover:border-pink-500 hover:text-pink-500">Delete</button>
                            </form>
                        @endcan
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection