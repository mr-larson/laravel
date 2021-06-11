@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section class="contain">

        <h1 class="text-2xl text-center text-blue-600 bg-gray title1">Create equipe</h1>
      
        <div class="bg-red-100 rounded text-red-600 my-4 shadow-lg mx-auto max-w-2xl">
            <ul class="list-disc list-inside">
            
                @foreach ($errors->all() as $message)
               {{--  le $key=>$message équivalent js de foreach=>(e,i)=> --}}
                {{-- @foreach ($errors->all() as $key=> $message) --}}
                    <li class="text-red-800"> {{  $message }}</li>
                    {{-- @php
                        dd($errors)
                    @endphp --}}
                @endforeach
            
            </ul>
        </div>

        {{-- $request->validate([
            'club' => 'required',
            'ville' => 'required',
            'pays' => 'required',
            'continent_id' => 'required',
        ]); --}}

        <form method="post" class="grid grid-cols-2 gap-x-2 gap-y-0 bg-yellow-200 rounded shadow-lg mx-auto p-3 w-2/5 mb-4" action="{{route("equipe.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="m-3 col-span-2	">
                <label  class="text-blue-600">logo</label> 
                <input type="file" class="px-3 py-1  bg-white w-full rounded-md" name="logo">
            </div>
            <div class="m-3 col-span-1">
                <label class="text-blue-600">club</label>
                <input type="text" class="px-3 py-1 w-full rounded-md" name="club">
            </div>
            <div class="m-3 px-3 col-span-1">
                <label class="text-blue-600">ville</label>
                <input type="text" class="px-3 py-1 w-full rounded-md" name="ville">
            </div>
            <div class="m-3 col-span-1">
                <label class="text-blue-600">pays</label>
                <input type="text" class="px-3 py-1 w-full rounded-md" name="pays">
            </div>
            <div class="m-3 col-span-1">
                <label class="text-blue-600">Max Joueurs</label>
                <input type="number" class="px-3 py-1 w-full rounded-md" name="max_joueurs">
            </div>
            
            <div class="m-3 col-span-1">
                <label class="text-blue-600">continent</label>
                <select class="custom-select px-3 py-1 w-full rounded-md" name="continent_id">
                    <option selected>choisissez un continent</option>
                    @foreach ($continents as $continent)
                        <option value="{{ $continent->id }}">{{ $continent->continent }}</option> 
                    @endforeach
                </select>
            </div>
            
            <div class="flex justify-end mt-10 mx-2">
                <button type="submit" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">Submit</button>
            </div>
        </form>
        
    </section>

@endsection

