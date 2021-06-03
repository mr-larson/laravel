@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')

    <!--Section Counts-->
    <div class="py-12">
        <h2 class="bg-blue-200 text-center p-2 mx-10 text-4xl font-bold rounded-lg shadow-lg">Section Counts</h2>
        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-5">

            <!--Card-->
            @foreach ($chiffres as $chiffre)
                <div class="rounded overflow-hidden shadow-lg">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $chiffre->figure }}</div>
                        <p class="text-gray-700 text-base">
                            {{ $chiffre->text }}
                        </p>
                    </div>
                    <div class="flex justify-center items-start ">
                        <a href="" class="text-center border-2 border-blue-300 text-blue-300 px-2 rounded-lg text-white m-1 w-auto text-center mb-2 hover:border-blue-500 hover:text-blue-500">Edit</a>
                    </div>    
                </div>
            @endforeach

        </div>
    </div>
@endsection