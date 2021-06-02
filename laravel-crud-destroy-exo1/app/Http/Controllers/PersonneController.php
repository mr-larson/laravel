<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    public function index(){
        $personnes = Personne::all();

        return view("backoffice.personnes.all",compact("personnes"));       
    }

    public function destroy($id){
        $personne = Personne::find($id);
        $personne->delete();

        return redirect()->back();       
    }

    public function edit($id){
        $personne = Personne::find($id);
        return view("backoffice.personnes.edit", compact("personnes"));       
    }

    public function update($id, request $request){
       $personne = Personne::find($id);
       $personne->nom = $request->nom;
       $personne->adress = $request->adresse;    
       $personne->description = $request->description; 
       $personne->update_at = now();   

       $personne->save();

       return redirect()->route("personne");
    }
}
