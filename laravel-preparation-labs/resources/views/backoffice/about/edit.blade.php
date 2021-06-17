@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')  

    <!--Section about-->
    <section id="" class="abouts my-3">
        <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg"data-aos="fade-up">Section about</h2>
        @if ($errors->any())
            <ul class="bg-red-200 text-red-800 text-center py-3 mx-10 mb-6 text-xl font-light rounded-lg shadow-lg">

                @foreach ($errors->all() as $message)
                    <li class="text-white">{{ $message }}</li>
                @endforeach
        
            </ul>
        @endif
        <!--Edit Card-->
        <form method="POST" class="grid grid-cols-1 bg-indigo-600 rounded shadow-lg mx-auto p-3 w-3/5 mb-4" action="{{ route('about.update', $about->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="my-4 col-span-2">
                <label class="text-white text-base">Titre</label>
                <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $about->h4 }}" name="h4">
            </div>
            <div class="my-4 col-span-2">
                <label class="text-white text-base">text</label>
                <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $about->p }}" name="p">
            </div>
            <div class="my-4 col-span-2">
                <label class="text-white text-base">Icone du about</label> 
                <select class="custom-select px-3 py-1 w-full rounded-md" value="{{ $about->icon }}" name="icon">
                    <option selected>choisissez une icone</option>
                    <option value="bx bx-receipt"><i class="bx bx-receipt"></i></option> 
                    <option value="bx bx-cube-alt"><i class="bx bx-cube-alt"></i></option> 
                    <option value="bx bx-images"><i class="bx bx-images"></i></option> 
                    <option value="bx bx-shield"><i class="bx bx-shield"></i></option> 
                </select>
            </div>
            <button type="submit" class="hover:bg-indigo-800 text-white font-bold py-2 px-4  mx-auto my-8 rounded">Submit</button>   
        </form>
    </section>

@endsection
