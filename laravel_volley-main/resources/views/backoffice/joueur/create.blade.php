@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section class="contain pb-20">
        <h1 class="text-2xl text-center text-blue-600 bg-gray title1">Create joueur</h1>
      
        <div class="bg-red-100 rounded text-red-600 my-4 shadow-lg mx-auto max-w-2xl">
            <ul class="list-disc list-inside">
            
                @foreach ($errors->all() as $message)
                    <li class="text-red-800">{{ $message }}</li>
                @endforeach
            
            </ul>
        </div>

        <form method="POST" class="bg-yellow-200 grid grid-cols-2 rounded shadow-lg mx-auto p-3 w-2/5 mb-4" action="{{route("joueur.store") }}" enctype="multipart/form-data">
            @csrf
            
            <div class="m-3 col-span-1">
                <label class="text-blue-600">Nom</label>
                <input type="text" class=" px-3 py-1 w-full rounded-md" name="nom">
            </div>
            <div class="m-3">
                <label class="text-blue-600">prenom</label>
                <input type="text" class=" px-3 py-1 w-full rounded-md" name="prenom">
            </div>
            <div class="m-3">
                <label class="text-blue-600">age</label>
                <input type="number" class="px-3 py-1 w-full rounded-md" name="age">
            </div>
            <div class="m-3">
                <label class="text-blue-600">phone</label>
                <input type="number" class=" px-3 py-1 w-full rounded-md" name="phone">
            </div>
            <div class="m-3">
                <label class="text-blue-600">email</label>
                <input type="text" class=" px-3 py-1 w-full rounded-md" name="email">
            </div>
            <div class="m-3">
                <label class="text-blue-600">genre</label>
                <select class="custom-select px-3 py-1 w-full rounded-md"  name="genre_id">
                <option selected>choisissez un genre</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->genre }}</option> 
                @endforeach
                </select>
            </div>
            <div class="m-3">
                <label class="text-blue-600">origine</label>
                <input type="text" class="px-3 py-1 w-full rounded-md" name="origine">
            </div>
            <div class="m-3">
                <label  class="text-blue-600">Photo</label> 
                <input type="file" class="px-3 py-1 w-full rounded-md" name="image">
            </div>
            <div class="m-3">
                <label class="text-blue-600">Equipe</label>
                <select class="custom-select px-3 py-1 w-full rounded-md"  name="equipe_id">
                <option selected>Choisissez une Équipe</option>
                @foreach ($equipes as $equipe)
                    <option value="{{ $equipe->id }}">{{ $equipe->club}}</option> 
                @endforeach
                </select>
            </div>
            <div class="m-3">
                <label class="text-blue-600">poste</label>
                <select class="custom-select px-3 py-1 w-full rounded-md"  name="role_id">
                    <option selected>choisissez un poste</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->poste }}</option> 
                    @endforeach
                </select>
            </div>
            <div class="flex justify-end mt-10 mx-2">
                <button type="submit" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">Submit</button>
            </div>
            
        </form>
        
    </section>

@endsection

