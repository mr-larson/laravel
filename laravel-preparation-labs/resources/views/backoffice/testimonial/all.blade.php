@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')
    <!--Section testimonials-->
    <section id="services" class="services my-3">
        @can('create', App\models\Testimonial::class)
        <div class="max-w-6xl mx-auto  flex justify-center my-2" data-aos="fade-up">
            <a class="font-semibold py-2 px-4 rounded shadow icon-box" href="/testimonial/create">+ Create</a>
        </div>
         @endcan
        <div class="container" data-aos="fade-up" data-aos-delay="50">
            <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-5">
                @foreach ($testimonials as $testimonial)
                        <div class="icon-box {{ $testimonial->id }} shadow-lg">
                            <div class="pb-4">
                                <img class="w-full" src="{{asset($testimonial->img) }}" alt="img">
                            </div>
                            <h3 class="py-2">{{ $testimonial->h3 }}</h3>
                            <h4 class="py-2">{{ $testimonial->h4 }}</h4>
                            <p class="py-2">{{ $testimonial->p }}</p>
                            <div class="buttons flex justify-center">
                                @can('update', $testimonial)
                                    <a href="{{route('testimonial.edit',$testimonial->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                                @endcan
                                @can('delete', $testimonial)
                                    <form action="{{ route('testimonial.destroy',$testimonial->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 hover:bg-red-600 text-white px-1 rounded-lg m-2 w-auto text-center">Delete</button>
                                    </form>
                                @endcan
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
        <div class="flex justify-center" data-aos="fade-up" data-aos-delay="150">{{ $testimonials->links() }}</div>
    </section>
@endsection






            
