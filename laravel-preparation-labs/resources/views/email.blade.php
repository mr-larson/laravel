@extends('layouts.appFront')

@section('content')
<!--Card email-->
    <div class="container my-3">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10 bg-indigo-400">
                <h2 class="text-white text-center py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg">Section email</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-offset-3 col-sm-6">
                <div class="rounded overflow-hidden shadow-lg">
                    <div class="px-6 py-4">
                        <div class="icon-box">
                            <h1 class="icon-box shadow-lg text-gray-400 font-semibold text-base" >
                                {{ $contenuEmail['name'] }}
                            </h1>
                        </div>
                        <div class="icon-box">
                            <h2 class="icon-box shadow-lg text-gray-400 font-semibold text-base">
                                {{ $contenuEmail['email'] }}
                            </h2>
                        </div>
                        <div class="icon-box">
                            <h3 class="icon-box shadow-lg text-gray-400 font-semibold text-base">
                                {{ $contenuEmail['subject'] }}
                            </h3>
                        </div>
                        <div class="icon-box">
                            <p class="icon-box shadow-lg text-gray-400 font-semibold text-base">
                                {{ $contenuEmail['message'] }}
                            </p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>  
@endsection