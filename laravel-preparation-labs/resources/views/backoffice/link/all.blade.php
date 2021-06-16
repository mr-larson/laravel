@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')
    <!--Section links-->
    <section id="links" class="services my-3">
        <div class="container" data-aos="fade-up">
            <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-5">
                @foreach ($links as $link)
                        <div class="icon-box {{ $link->id }} shadow-lg">
                            <h4>{{ $link->h4 }}</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i>{{ $link->li1 }}</li>
                                <li><i class="bx bx-chevron-right"></i>{{ $link->li2 }}</li>
                                <li><i class="bx bx-chevron-right"></i>{{ $link->li3 }}</li>
                                <li><i class="bx bx-chevron-right"></i>{{ $link->li4 }}</li>
                                <li><i class="bx bx-chevron-right"></i>{{ $link->li5 }}</li>
                            </ul>
                            <div class="buttons flex justify-center">
                                @can('update', $link)
                                    <a href="{{route('link.edit',$link->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                                @endcan
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection






            
