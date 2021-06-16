@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')

    <!--Section Hero-->
    <section class="services">
        <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg"data-aos="fade-up">Section hero</h2>
        <!--Edit Card-->
        <form method="POST" class="grid grid-cols-1 bg-indigo-600 rounded shadow-lg mx-auto p-3 w-3/5 mb-4" action="{{ route('hero.update', $hero->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="my-4 col-span-2">
                    <label class="text-white text-base">Titre</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $hero->h1 }}" name="h1">
                </div>
                <div class="my-4  col-span-2">
                    <label class="text-white text-base">Texte d'accompagnement</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $hero->h2 }}" name="h2">
                </div>
                <div class="my-4  col-span-2">
                    <label class="text-white text-base">Image de la couverture</label>
                    <div class="picture_overview" >
                        <img src="{{ asset("img/" . $hero->img) }}" alt="" id="preview_link">
                    </div>
                    <input name="img" class="border border-gray-300 p-3 w-full rounded-sm text-white" type="file" id="pictureSelector">
                </div>
                <button type="submit" class="hover:bg-indigo-800 text-white font-bold py-2 px-4  mx-auto my-8 rounded">Submit</button>
        </form>
    </section>
@endsection
