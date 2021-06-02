<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function index(){
        $eleve = Eleve::all();
        $page = "eleve";

        return view("backoffice.eleve.all",compact("eleve","page"));       
    }


    public function destroy($id){
        $eleve = Eleve::find($id);
        $eleve->delete();

        return redirect()->back();       
    }


    public function edit($id){
        $eleve = Eleve::find($id);
        $page = "eleve";

        return view("backoffice.eleve.edit", compact("eleve","page"));       
    }


    public function update($id, request $request){
       $eleve = Eleve::find($id);
       $eleve->nom = $request->nom;
       $eleve->prenom = $request->prenom;
       $eleve->age = $request->age;    
       $eleve->date = $request->date;
       $eleve->genre = $request->genre; 
       $eleve->updated_at = now();   

       $eleve->save();

       return redirect()->route("eleve");
    }
}
