@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')

    <!--Section About-->
    <div class="py-12">
        <h2 class="backoffice_title text-center text-white py-3 mx-10 text-4xl font-light rounded-lg shadow-lg apparition1">Section about</h2>
        <!--Edit Card-->
        <form method="POST" class="backoffice_title grid grid-cols-1 bg-blue-200 rounded shadow-lg mx-auto p-3 w-3/5 mb-4 apparition" action="/about/" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="px-6 py-4">
                <div class="m-3 col-span-2">
                    <label class="text-gray-700 text-base">h3</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" name="h3">
                </div>
                <div class="m-3 col-span-2">
                    <label class="text-gray-700 text-base">p</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" name="p">
                </div>
                <div class="m-3 col-span-2">
                    <label class="text-gray-700 text-base">li1</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" name="li1">
                </div>
                <div class="m-3 col-span-2">
                    <label class="text-gray-700 text-base">li2</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" name="li2">
                </div>
                <div class="m-3 col-span-2">
                    <label class="text-gray-700 text-base">li3</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" name="li3">
                </div>
                <div class="flex justify-end mt-10 col-span-2">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">Submit</button>
                </div>
            </div>     
        </form>
    </div>
@endsection
