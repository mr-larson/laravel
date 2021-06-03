@extends('layouts.appFront')
@section('content')
    @include('layouts.navigation')
        <!--Section Counts-->
        <div class="py-12">
            <div class="p-10 grid sm:grid-cols-1 md:grid-cols-3  gap-5">
                <a href="{{ route('service.index') }}" class="bg-red-400 block ">
                    <div class="rounded overflow-hidden shadow-lg py-20 flex justify-center"
                        style="background: linear-gradient(
                        45deg, rgba(86, 58, 250, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%), url('{{ asset('img/hero-bg.jpg') }}'); background-size: cover;">
                        <p class="text-white text-3xl">Services</p>
                    </div>
                </a>

                <a href="{{ route('service.index') }}" class="bg-red-400 block ">
                    <div class="rounded overflow-hidden shadow-lg py-20 flex justify-center"
                        style="background: linear-gradient(
                                        45deg, rgba(86, 58, 250, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%), url('{{ asset('img/hero-bg.jpg') }}'); background-size: cover;">
                        <p class="text-white text-3xl">Témoignages</p>
                    </div>
                </a>

                <a href="{{ route('service.index') }}" class="bg-red-400 block ">
                    <div class="rounded overflow-hidden shadow-lg py-20 flex justify-center"
                        style="background: linear-gradient(
                                        45deg, rgba(86, 58, 250, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%), url('{{ asset('img/hero-bg.jpg') }}'); background-size: cover;">
                        <p class="text-white text-3xl">Chiffres</p>
                    </div>
                </a>
            </div>
        </div>
@endsection
