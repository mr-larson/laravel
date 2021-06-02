<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index(){
        $photos = Photo::all();
        $page = "photo";

        return view("backoffice.photo.all",[
            'photo' => DB::table('photos')->paginate(2),"page"=>"photo"
        ]);       
    }


    public function destroy($id){
        $photo = Photo::find($id);
        $photo->delete();

        return redirect()->back();       
    }


    public function edit($id){
        $photo = Photo::find($id);
        $page = "photo";

        return view("backoffice.photo.edit", compact("photo","page"));       
    }


    public function update($id, Request $request){
       $photo = Photo::find($id);
       $photo->nom = $request->nom;
       $photo->lien = $request->lien;
       $photo->categorie = $request->categorie;
       $photo->description = $request->description;    
       $photo->updated_at = now();   

       $photo->save();

       return redirect()->route("photo");
    }


    public function create(){
        return view("backoffice.photo.create");
    }



    public function store(Request $request){
        $request->validate([
	        'nom' => 'required|max:30',
	        'lien' => 'required',
            'categorie' => 'required|max:50',
	        'description' => 'required|max:255',
	    ]);
        $photo = new Photo;
        $photo->nom = $request->nom;
        $photo->lien = $request->file("lien")->hashName();
        $photo->categorie = $request->categorie;
        $photo->description = $request->description;
        $photo->created_at = now();   
 
        $photo->save();
        $request->file('lien')->storePublicly('img', 'public');
        return redirect()->route('photo')->with('message', 'The success message!');
    }

    public function download($id) {
        $photo = Photo::find($id);
        return Storage::disk("public")->download("img/" . $photo->lien);
    }

    public function show($id){
        $photos = Photo::all();
        $photo = Photo::find($id);
        $page = "photo";
        return view('backoffice.photo.show',compact('photo','photos',"page"));
    }
}
