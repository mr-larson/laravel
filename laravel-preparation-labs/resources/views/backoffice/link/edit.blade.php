@section('content')
    @include('layouts.navigation')
    <!--Section links-->
    <section id="links" class="services my-3">
        <div class="container" data-aos="fade-up">
            <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg"data-aos="fade-up">Section links</h2>
            <!--Edit Card-->
            <form method="POST" class="grid grid-cols-1 bg-indigo-600 rounded shadow-lg mx-auto p-3 w-3/5 mb-4" action="{{ route('link.update', $link->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="my-4 col-span-2">
                        <label class="text-white text-base">Titre</label>
                        <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $link->h4 }}" name="h4">
                    </div>
                    <div class="my-4  col-span-2">
                        <label class="text-white text-base">Texte d'accompagnement</label>
                        <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $link->li1 }}" name="li1">
                    </div>
                    <div class="my-4  col-span-2">
                        <label class="text-white text-base">Texte d'accompagnement</label>
                        <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $link->li2 }}" name="li2">
                    </div>
                    <button type="submit" class="hover:bg-indigo-800 text-white font-bold py-2 px-4  mx-auto my-8 rounded">Submit</button>
                   
            </form>
        </div>
    </section>
@endsection