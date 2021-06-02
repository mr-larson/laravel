<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(){
        $album = Album::all();
        $photos = Photo::all();
        $page = "album";

        return view("backoffice.album.all",compact("album","page","photos"));       
    }


    public function destroy($id){
        $album = Album::find($id);
        $album->delete();

        return redirect()->back();       
    }


    public function edit($id){
        $album = Album::find($id);
        $page = "album";

        return view("backoffice.album.edit", compact("album","page"));       
    }


    public function update($id, Request $request){
       $album = Album::find($id);
       $album->nom = $request->nom;
       $album->description = $request->description;   
       $album->updated_at = now();   

       $album->save();

       return redirect()->route("album");
    }


    public function create(){
        return view("backoffice.album.create");
    }



    public function store(Request $request){
        $album = new Album;
        $album->nom = $request->nom;
        $album->description = $request->description; 
        $album->updated_at = now();   
 
        $album->save();
 
        return redirect()->route("album")->with('message', 'The success message!');;
    }
}
