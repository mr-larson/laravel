<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class photoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::paginate(2);
        $page = "photo";
        return view("backoffice.photo.all",compact("page", "photos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $albums = Album::all();
        return view("backoffice.photo.create", compact("albums"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
	        'nom' => 'required|max:30',
	        'image' => 'required',
            'categorie'=>"required|max:50",
	        'description' => 'required|max:255',
	    ]);
        $photo = new Photo;
        $photo->nom = $request->nom;
        $photo->image = $request->file("image")->hashName();
        $photo->categorie = $request->categorie;
        $photo->description = $request->description;
        $photo->album_id = $request->album_id;
        $photo->created_at = now();   
 
        $photo->save();
        $request->file('image')->storePublicly('img', 'public');
        return redirect()->route('photo.index')->with('message', 'The success message!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        
        $page = "photo";
        return view('backoffice.photo.show',compact('photo',"page"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        $albums = Album::all();
        return view("backoffice.photo.edit", compact('photo',"albums"));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        $request->validate([
	        'nom' => 'required|max:30',
	        'image' => 'required',
            'categorie'=>"required|max:50",
	        'description' => 'required|max:255',
	    ]);

       $photo->nom = $request->nom;
       if ($request->file("lien") != null){
           Storage::disk('public')->delete('img/' . $photo->image);
           $photo->image = $request->file("image")->hashName();
           $request->file('image')->storePublicly('img', 'public'); 
       }
       $photo->categorie = $request->categorie;
       $photo->description = $request->description;
       $photo->album_id = $request->album_id;    
       $photo->updated_at = now();   

       $photo->save();
       return redirect()->route("photo.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        Storage::disk('public')->delete('img/' . $photo->image);
        $photo->delete();
        return redirect()->back(); 
    }

    public function download($id) {
        $photo = Photo::find($id);
        return Storage::disk("public")->download("img/" . $photo->image);
    }
}
