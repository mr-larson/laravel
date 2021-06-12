@extends('layouts.appFront')

@section('content')
    

<!--Section Service-->
<i class='bx bxs-user-account'></i>


<div class="py-12">
    <h2 class="backoffice_title text-center text-white py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg apparition1">Section Service</h2>
    

        <!--Edit Card-->
        <form method="POST" class="backoffice_title grid grid-cols-1 bg-blue-200 rounded shadow-lg mx-auto p-3 w-3/5 mb-4 apparition" action="/service/{{$service->id}}" enctype="multipart/form-data">
            @csrf
            @method('put')
                <div class="px-6 py-4">
                    <div class="m-3 col-span-2">
                        <label class="text-gray-700 text-base">title</label>
                        <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $service->title }}" name="title">
                    </div>
                    <div class="m-3 col-span-2">
                        <label class="text-gray-700 text-base">text</label>
                        <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $service->text }}" name="text">
                    </div>

                    <div class="m-3 col-span-2">
                        <label class="text-gray-700 text-base">icon</label> 
                        <select class="custom-select px-3 py-1 w-full rounded-md" name="icon">
                            <option selected>choisissez un icon</option>
                            <option {{ $service->icon == "bx bxl-dribbble" ? "selected" : null}}  value="bx bxl-dribbble">lol <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M14.844 20H6.5C5.121 20 4 18.879 4 17.5S5.121 15 6.5 15h7c1.93 0 3.5-1.57 3.5-3.5S15.43 8 13.5 8H8.639c-.391.771-.868 1.443-1.354 2H13.5c.827 0 1.5.673 1.5 1.5S14.327 13 13.5 13h-7C4.019 13 2 15.019 2 17.5S4.019 22 6.5 22h9.593C15.636 21.422 15.2 20.753 14.844 20zM5 2C3.346 2 2 3.346 2 5c0 3.188 3 5 3 5s3-1.813 3-5C8 3.346 6.654 2 5 2zM5 6.5C4.172 6.5 3.5 5.828 3.5 5S4.172 3.5 5 3.5 6.5 4.172 6.5 5 5.828 6.5 5 6.5z"></path><path d="M19,14c-1.654,0-3,1.346-3,3c0,3.188,3,5,3,5s3-1.813,3-5C22,15.346,20.654,14,19,14z M19,18.5 c-0.828,0-1.5-0.672-1.5-1.5s0.672-1.5,1.5-1.5s1.5,0.672,1.5,1.5S19.828,18.5,19,18.5z"></path></svg></option> 
                            <option {{ $service->icon == "bx bx-file" ? "selected" : null}}  value="bx bxl-dribbble"><i class="bx bx-file"></i></option> 
                            <option {{ $service->icon == "bx bx-tachometer" ? "selected" : null}}  value="bx bxl-dribbble"><i class="bx bx-tachometer"></i></option> 
                            <option {{ $service->icon == "bx bx-layer" ? "selected" : null}}  value="bx bxl-dribbble"><i class="bx bx-layer"></i></option> 
                            <option {{ $service->icon == "bx bx-slideshow" ? "selected" : null}}  value="bx bxl-dribbble"><i class="bx bx-slideshow"></i></option> 
                            <option {{ $service->icon == "bx bx-arch" ? "selected" : null}}  value="bx bxl-dribbble"><i class="bx bx-arch"></i></option> 
                        </select>
                    </div>

                    <div class="m-3 col-span-2">
                        <label class="text-gray-700 text-base">shape</label>
                        <select class="custom-select px-3 py-1 w-full rounded-md" name="shape">
                            <option selected>choisissez un Shape</option>
                            @foreach ($services as $item)
                                <option {{ $service->shape == $item->shape ? "selected" : null}} value="{{ $item->shape }}">Forme {{ $item->id }} </option> 
                            @endforeach
                        </select>
                    </div>  

                </div>    
                <div class="flex justify-end mt-10 col-span-2">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">Submit</button>
                </div>    
        </form>

    
</div>

@endsection