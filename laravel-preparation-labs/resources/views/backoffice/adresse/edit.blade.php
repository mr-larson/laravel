@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')

    <!--Section adresse-->
    <section class="services">
        <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg"data-aos="fade-up">Section adresse</h2>
        @if ($errors->any())
            <ul class="bg-red-200 text-red-800 text-center py-3 mx-10 mb-6 text-xl font-light rounded-lg shadow-lg">

                @foreach ($errors->all() as $message)
                    <li class="text-white">{{ $message }}</li>
                @endforeach
        
            </ul>
        @endif
        <!--Edit Card-->
        <form method="POST" class="grid grid-cols-1 bg-indigo-600 rounded shadow-lg mx-auto p-3 w-3/5 mb-4" action="{{ route('adresse.update', $adresse->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="my-4 col-span-2">
                    <label class="text-white text-base">rue</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $adresse->rue }}" name="rue">
                </div>
                <div class="my-4  col-span-2">
                    <label class="text-white text-base">ville</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $adresse->ville }}" name="ville">
                </div>
                <div class="my-4  col-span-2">
                    <label class="text-white text-base">pays</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $adresse->pays }}" name="pays">
                </div>
                <div class="my-4  col-span-2">
                    <label class="text-white text-base">phone</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $adresse->phone }}" name="phone">
                </div>
                <div class="my-4  col-span-2">
                    <label class="text-white text-base">phone 2</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $adresse->phone2 }}" name="phone2">
                </div>
                <div class="my-4  col-span-2">
                    <label class="text-white text-base">email</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $adresse->email }}" name="email">
                </div>
                <div class="my-4  col-span-2">
                    <label class="text-white text-base">email 2</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $adresse->email2 }}" name="email2">
                </div>
                <button type="submit" class="hover:bg-indigo-800 text-white font-bold py-2 px-4  mx-auto my-8 rounded">Submit</button>
               
        </form>
    </section>
@endsection
