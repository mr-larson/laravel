@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section class="contain">

        <h1 class="text-2xl text-center text-blue-600 my-10 bg-gray title1">Edit joueur</h1>
    
        <div class="bg-red-100 rounded text-red-600 my-4 shadow-lg mx-auto max-w-2xl">
            <ul class="list-disc list-inside">
            
                @foreach ($errors->all() as $message)
                    <li class="text-red-800">{{ $message }}</li>
                @endforeach
            
            </ul>
        </div>

        <form method="POST" class="grid grid-cols-2 bg-yellow-200 rounded shadow-lg mx-auto p-3 w-2/5 mb-4" action="/joueur/{{$joueur->id}}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="m-3">
                <label class="text-blue-600">Nom</label>
                <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $joueur->nom }}" name="nom">
            </div>
            <div class="m-3">
                <label class="text-blue-600">prenom</label>
                <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $joueur->prenom }}" name="prenom">
            </div>
            <div class="m-3 col-span-2">
                <label class="text-blue-600">Équipe</label>
                <select class="custom-select px-3 py-1 w-full rounded-md" name="equipe_id">
                <option selected>choisisse une équipe</option>
                @foreach ($equipes as $equipe)
                    <option {{ $joueur->equipe_id == $equipe->id ? "selected" : null }} value="{{ $equipe->id }}">{{ $equipe->club }}</option> 
                 @endforeach
                </select>
            </div>
            <div class="m-3">
                <label class="text-blue-600">phone</label>
                <input type="string" class="px-3 py-1 w-full rounded-md" value="{{ $joueur->phone }}" name="phone">
            </div>
            <div class="m-3">
                <label class="text-blue-600">email</label>
                <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $joueur->email }}" name="email">
            </div>
            <div class="m-3">
                <label class="text-blue-600">age</label>
                <input type="number" class="px-3 py-1 w-full rounded-md" value="{{ $joueur->age }}" name="age">
            </div>
            <div class="m-3">
                <label class="text-blue-600">genre</label>
                <select class="custom-select px-3 py-1 w-full rounded-md" name="genre_id">
                <option selected>choisissez un genre</option>
                @foreach ($genres as $genre)
                    <option {{ $joueur->genre->id == $genre->id ? "selected" : null }} value="{{ $genre->id }}">{{ $genre->genre }}</option> 
                 @endforeach
                </select>
            </div>
            <div class="m-3">
                <label class="text-blue-600">origine</label>
                <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $joueur->origine }}" name="origine">
            </div>
            <div class="m-3">
                <label class="text-blue-600">poste</label>
                <select class="custom-select px-3 py-1 w-full rounded-md col-span-2" name="role_id">
                    @foreach ($roles as $role)
                    <option {{ $joueur->role->id == $role->id ? "selected" : null }} value="{{ $role->id }}">{{ $role->poste }}</option> 
                    @endforeach
                </select>
            </div>
            <div class="m-3">
                <label  class="text-blue-600">image</label> 
                <input type="file" class="px-3 py-1 w-full rounded-md" value="{{ $joueur->image }}" name="image">
            </div>
            <div class="flex justify-end mt-10 col-span-2">
                <button type="submit" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">Submit</button>
            </div>
            
        </form>
        
    </section>
  
@endsection

