@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')
    <!--Section abouts-->
    <section id="about" class="about my-3">
        <div class="container">
            @can('create', App\models\about::class)
            <div class="max-w-6xl mx-auto  flex justify-center my-2">
                <a class="font-semibold py-2 px-4 rounded shadow icon-box bg-white text-gray-600" href="/about/create"> + Create</a>
            </div>
             @endcan
            <div class="row">
                <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
                    <div class="content ml-4">
                        <h3>{{ $aboutTitre->h3 }}</h3>
                        <p>{{ $aboutTitre->p }}</p>
                        <a href="#" class="about-btn">Edit <i class="bx bx-chevron-right"></i></a>
                    </div>
                </div>
                
                <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
                    <div class="row">
                        @foreach ($aboutTexts as $about)
                        <div class="col-6 icon-box">
                            <div class="icon-boxes d-flex flex-column justify-content-center">
                                    <div class="icon-box {{ $about->id }}" data-aos="fade-up" data-aos-delay="100">
                                        <i class="{{ $about->icon }}"></i>
                                        <h4>{{ $about->h4 }}</a></h4>
                                        <p>{{ $about->p }}</p>
                                        <div class="buttons flex justify-center">
                                         @can('update', $about)
                                                <a href="{{route('about.edit',$about->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                                         @endcan
                                         @can('delete', $about)
                                                <form action="{{ route('about.destroy',$aboutText->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="bg-red-500 hover:bg-red-600 text-white px-1 rounded-lg m-2 w-auto text-center">Delete</button>
                                                </form>
                                         @endcan
                                        </div>
                                    </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection






            
