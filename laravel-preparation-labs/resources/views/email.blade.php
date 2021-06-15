@extends('layouts.appFront')

@section('content')

    <div class="grid grid-cols-1 gap-5 max-w-6xl mx-auto py-20">

        <!--Card email-->
        
            <div class="rounded overflow-hidden shadow-lg apparition">
                <div class="px-6 py-4">

                    <h1 class="text-gray-700 font-semibold text-base">
                        {{ $contenuEmail['name'] }}
                    </h1>
                    <h2 class="text-gray-700 font-semibold text-base">
                        {{ $contenuEmail['email'] }}
                    </h2>
                    <h3 class="text-gray-700 font-semibold text-base">
                        {{ $contenuEmail['subject'] }}
                    </h3>
                    <p class="text-gray-700 font-semibold text-base">
                        {{ $contenuEmail['message'] }}
                    </p>
                    
                </div> 
            </div>
    </div>   
@endsection