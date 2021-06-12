@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')

    <!--Section Counts-->
    <div class="py-12">
        <h2 class="backoffice_title text-center text-white py-3 mx-10 text-4xl font-light rounded-lg shadow-lg apparition1">Section Counts</h2>
        <!--Edit Card-->
        <form method="POST" class="backoffice_title grid grid-cols-1 bg-blue-200 rounded shadow-lg mx-auto p-3 w-3/5 mb-4 apparition" action="/chiffre" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="px-6 py-4">
                <div class="m-3 col-span-2">
                    <label class="text-gray-700 text-base">Figure</label>
                    <input type="number" class="text-gray-700 text-base">
                </div>
                <div class="m-3 col-span-2">
                    <label class="text-gray-700 text-base">text</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" name="text">
                </div>
                <div class="flex justify-end mt-10 col-span-2">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">Submit</button>
                </div>
            </div>     
        </form>
    </div>
@endsection
