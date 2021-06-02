<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use Illuminate\Http\Request;

class BatimentController extends Controller
{
    public function index(){
        $batiment = Batiment::all();
        $page = "batiment";

        return view("backoffice.batiment.all",compact("batiment","page"));       
    }


    public function destroy($id){
        $batiment = Batiment::find($id);
        $batiment->delete();

        return redirect()->back();       
    }


    public function edit($id){
        $batiment = Batiment::find($id);
        $page = "batiment";

        return view("backoffice.batiment.edit", compact("batiment","page"));       
    }


    public function update($id, request $request){
       $batiment = Batiment::find($id);
       $batiment->nom = $request->nom;
       $batiment->adresse = $request->adresse;    
       $batiment->description = $request->description; 
       $batiment->updated_at = now();   

       $batiment->save();

       return redirect()->route("batiment");
    }


    public function create(){
        return view("backoffice.batiment.create");
    }



    public function store(request $request){
        $batiment = new Batiment;
        $batiment->nom = $request->nom;
        $batiment->adresse = $request->adresse;    
        $batiment->description = $request->description; 
        $batiment->updated_at = now();   
 
        $batiment->save();
 
        return redirect()->route("batiment");
    }
}
