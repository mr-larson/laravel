@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')  

    <!--Section Service-->
    <section id="" class="services my-3">
        <div class="max-w-6xl mx-auto  flex justify-center my-2">
            <h2 class="text-center text-white py-3 mx-10 mb-6 text-xl font-light rounded-lg shadow-lg apparition1">Ajouter un service</h2>
        </div>
        <!--Edit Card-->
        <form method="POST" class="grid grid-cols-1 bg-blue-200 rounded shadow-lg mx-auto p-3 w-3/5 mb-4 apparition" action="/service" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="rounded overflow-hidden shadow-lg">
                <div class="px-6 py-4">
                    <div class="m-3 col-span-2">
                        <label class="text-white text-base">Title</label>
                        <input type="text" class="px-3 py-1 w-full rounded-md" name="title">
                    </div>
                    <div class="m-3 col-span-2">
                        <label class="text-white text-base">Texte</label>
                        <input type="text" class="px-3 py-1 w-full rounded-md" name="text">
                    </div>
                    <div class="m-3 col-span-2">
                        <label class="text-white text-base">Icone du service</label> 
                        <select class="custom-select px-3 py-1 w-full rounded-md" name="icon">
                            <option selected>choisissez une icone</option>
        
                            <option value="bx bxl-dribbble"><i class="bx bx-file"></i></option> 
                            <option value="bx bxl-dribbble"><i class="bx bx-tachometer"></i></option> 
                            <option value="bx bxl-dribbble"><i class="bx bx-layer"></i></option> 
                            <option value="bx bxl-dribbble"><i class="bx bxl-dribbble"></i></option> 
                        </select>
                    </div>      
                </div>
                <div class="flex justify-center my-6 col-span-2">
                    <button type="submit" class="text-white font-bold rounded">Submit</button>
                </div>  
            </div>   
        </form>
    </section>

@endsection
