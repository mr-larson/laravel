@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')
    <!--Section adresses-->
    <section id="adresses" class="services my-3">
        <div class="container" data-aos="fade-up">
            <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-5">
                <div class="icon-box {{ $adresse->id }} shadow-lg">
                    <h3>Our street</h3>
                    <p>{{ $adresse->rue }}</p>
                    <div class="buttons flex justify-center">
                        @can('update', $adresse)
                            <a href="{{route('adresse.edit',$adresse->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                        @endcan
                    </div>
                </div>
                <div class="icon-box {{ $adresse->id }} shadow-lg">
                    <h3>Our city</h3>
                    <p>{{ $adresse->ville }}</p>
                    <div class="buttons flex justify-center">
                        @can('update', $adresse)
                            <a href="{{route('adresse.edit',$adresse->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                        @endcan
                    </div>
                </div>
                <div class="icon-box {{ $adresse->id }} shadow-lg">
                    <h3>Our nation</h3>
                    <p>{{ $adresse->pays }}</p>
                    <div class="buttons flex justify-center">
                        @can('update', $adresse)
                            <a href="{{route('adresse.edit',$adresse->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                        @endcan
                    </div>
                </div>
                <div class="icon-box {{ $adresse->id }} shadow-lg">
                    <h3>Email Us 1</h3>
                    <p>{{ $adresse->email }}</p>
                    <div class="buttons flex justify-center">
                        @can('update', $adresse)
                            <a href="{{route('adresse.edit',$adresse->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                        @endcan
                    </div>
                </div>
                <div class="icon-box {{ $adresse->id }} shadow-lg">
                    <h3>Email Us 2</h3>
                    <p>{{ $adresse->email2 }}</p>
                    <div class="buttons flex justify-center">
                        @can('update', $adresse)
                            <a href="{{route('adresse.edit',$adresse->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                        @endcan
                    </div>
                </div>
                <div class="icon-box {{ $adresse->id }} shadow-lg">
                    <h3>Call Us 1</h3>
                    <p>{{ $adresse->phone }}</p>
                    <div class="buttons flex justify-center">
                        @can('update', $adresse)
                            <a href="{{route('adresse.edit',$adresse->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                        @endcan
                    </div>
                </div>
                <div class="icon-box {{ $adresse->id }} shadow-lg">
                    <h3>Call Us 2</h3>
                    <p>{{ $adresse->phone2 }}</p>
                    <div class="buttons flex justify-center">
                        @can('update', $adresse)
                            <a href="{{route('adresse.edit',$adresse->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection