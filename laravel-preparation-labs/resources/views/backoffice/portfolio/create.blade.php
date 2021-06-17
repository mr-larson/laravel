@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')

    <!--Section portfolio-->
    <section class="services">
        <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg"data-aos="fade-up">Section portfolio</h2>
        @if ($errors->any())
            <ul class="bg-red-200 text-red-800 text-center py-3 mx-10 mb-6 text-xl font-light rounded-lg shadow-lg">

                @foreach ($errors->all() as $message)
                    <li class="text-white">{{ $message }}</li>
                @endforeach
        
            </ul>
        @endif
        <!--Edit Card-->
        <form method="POST" class="grid grid-cols-1 bg-indigo-600 rounded shadow-lg mx-auto p-3 w-3/5 mb-4" action="{{ route('portfolio.store') }}" enctype="multipart/form-data">
            @csrf
            @method('post')
                <div class="my-4 col-span-2">
                    <label class="text-white text-base">Titre</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" name="h4">
                </div>
                <div class="my-4  col-span-2">
                    <label class="text-white text-base">Texte d'accompagnement</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" name="p">
                </div>
                <div class="my-4  col-span-2">
                    <label class="text-white text-base">Image</label>
                    <input name="img" class="border border-gray-300 p-3 w-full rounded-sm text-white" type="file" id="pictureSelector">
                </div>
                <button type="submit" class="hover:bg-indigo-800 text-white font-bold py-2 px-4  mx-auto my-8 rounded">Submit</button>
        </form>
    </section>
@endsection
