<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function index(){
        $entreprise = Entreprise::all();
        $page = "entreprise";

        return view("backoffice.entreprise.all",compact("entreprise","page"));       
    }


    public function destroy($id){
        $entreprise = Entreprise::find($id);
        $entreprise->delete();

        return redirect()->back();       
    }


    public function edit($id){
        $entreprise = Entreprise::find($id);
        $page = "entreprise";

        return view("backoffice.entreprise.edit", compact("entreprise","page"));       
    }


    public function update($id, Request $request){
       $entreprise = Entreprise::find($id);
       $entreprise->nom = $request->nom;
       $entreprise->description = $request->description;    
       $entreprise->updated_at = now();   

       $entreprise->save();

       return redirect()->route("entreprise");
    }


    public function create(){
        return view("backoffice.entreprise.create");
    }



    public function store(Request $request){
        $entreprise = new entreprise;
        $entreprise->nom = $request->nom;
        $entreprise->description = $request->description; 
        $entreprise->auteur = $request->auteur;
        $entreprise->updated_at = now();   
 
        $entreprise->save();
 
        return redirect()->route("entreprise");
    }
}
