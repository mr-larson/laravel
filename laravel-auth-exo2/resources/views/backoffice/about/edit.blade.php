@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')

    <!--Section About-->
    <div class="py-12">
        <h2 class="backoffice_title text-center text-white py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg apparition1">Section about</h2>
        <!--Edit Card-->
        <form method="POST" class="backoffice_title grid grid-cols-1 bg-blue-200 rounded shadow-lg mx-auto p-3 w-3/5 mb-4 apparition" action="/about/{{$about->id }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="px-6 py-4">
                <div class="m-3 col-span-2">
                    <label class="text-gray-700 text-base">Titre</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $about->h3 }}" name="h3">
                </div>
                <div class="m-3 col-span-2">
                    <label class="text-gray-700 text-base">Paragraphe</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $about->p }}" name="p">
                </div>
                <div class="m-3 col-span-2">
                    <label class="text-gray-700 text-base">Point 1</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $about->li1 }}" name="li1">
                </div>
                <div class="m-3 col-span-2">
                    <label class="text-gray-700 text-base">Point 2</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $about->li2 }}" name="li2">
                </div>
                <div class="m-3 col-span-2">
                    <label class="text-gray-700 text-base">Point 3</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $about->li3 }}" name="li3">
                </div>
                <div class="flex justify-end mt-10 col-span-2">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">Submit</button>
                </div>
            </div>     
        </form>
    </div>
@endsection
