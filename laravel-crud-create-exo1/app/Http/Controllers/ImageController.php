<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(){
        $image = Image::all();
        $page = "image";

        return view("backoffice.image.all",compact("image","page"));       
    }


    public function destroy($id){
        $image = Image::find($id);
        $image->delete();

        return redirect()->back();       
    }


    public function edit($id){
        $image = Image::find($id);
        $page = "image";

        return view("backoffice.image.edit", compact("image","page"));       
    }


    public function update($id, Request $request){
       $image = Image::find($id);
       $image->photo = $request->photo;
       $image->description = $request->description;    
       $image->updated_at = now();   

       $image->save();

       return redirect()->route("image");
    }


    public function create(){
        return view("backoffice.image.create");
    }



    public function store(Request $request){
        $image = new Image;
        $image->photo = $request->photo;
        $image->description = $request->description; 
        $image->updated_at = now();   
 
        $image->save();
 
        return redirect()->route("image");
    }
}
