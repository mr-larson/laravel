<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index(){
        $image = Image::all();
        $page = "images";

        return view("backoffice.image.all",compact("image","page"));       
    }


    public function destroy($id){
        $image = Image::find($id);
        Storage::disk("public")->delete("img/".$image->path);
        $image->delete();

        return redirect()->back();       
    }


    public function edit($id){
        $image = Image::find($id);
        $page = "images";

        return view("backoffice.image.edit", compact("image","page"));       
    }


    public function update($id, Request $request){
       $image = Image::find($id);
       Storage::disk("public")->delete("img/".$image->path);
       $image->updated_at = now();   
       $image->save();
       $request->file("path")->storePublicly();
        
       return redirect()->route("image");
    }


    public function create(){
        return view("backoffice.image.create");
    }



    public function store(Request $request){
        $image = new Image;
       
        $image->updated_at = now();   
 
        $image->save();
 
        return redirect()->route("image");
    }
}
