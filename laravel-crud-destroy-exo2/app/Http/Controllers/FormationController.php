<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index(){
        $formation = Formation::all();
        $page = "formation";

        return view("backoffice.formation.all",compact("formation","page"));       
    }


    public function destroy($id){
        $formation = Formation::find($id);
        $formation->delete();

        return redirect()->back();       
    }


    public function edit($id){
        $formation = Formation::find($id);
        $page = "formation";

        return view("backoffice.formation.edit", compact("formation","page"));       
    }


    public function update($id, request $request){
       $formation = Formation::find($id);
       $formation->nom = $request->nom;
       $formation->updated_at = now();   

       $formation->save();

       return redirect()->route("formation");
    }
}
