@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')

    <!--Section Hero-->
    <div class="py-12">
        <h2 class="backoffice_title text-center text-white py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg apparition1">Section hero</h2>
        <!--Edit Card-->
        <form method="POST" class="backoffice_title grid grid-cols-1 bg-blue-200 rounded shadow-lg mx-auto p-3 w-3/5 mb-4 apparition" action="/hero/" enctype="multipart/form-data">
            @csrf
            @method('put')
                <div class="my-4 col-span-2">
                    <label class="text-white text-base">Grand titre</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $hero->h1 }}" name="h1">
                </div>
                <div class="my-4  col-span-2">
                    <label class="text-white text-base">Texte d'accompagnement</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $hero->h2 }}" name="h2">
                </div>
                <div class="my-4  col-span-2">
                    <label class="text-white text-base">Image de la couverture</label>
                    {{-- <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $hero->h2 }}" name="h2"> --}}
                    <div class="picture_overview" style="background: linear-gradient(45deg, rgba(86, 58, 250, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%), url('{{ asset('img/hero-bg.jpg') }}'); background-size: cover;">
                        <img src="{{ asset("img/" . $hero->image) }}" alt="" id="preview_link">
                    </div>
                    <input name="image" class="border border-gray-300 p-3 w-full rounded-sm text-white" type="file" id="pictureSelector">
                </div>
                <button type="submit" class="backoffice_btn  hover:bg-blue-800 text-white font-bold py-2 px-4  mx-auto my-8 rounded">Submit</button>
               
        </form>
    </div>
@endsection
