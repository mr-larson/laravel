<?php

namespace App\Http\Controllers;

use App\Models\Bibliotheque;
use Illuminate\Http\Request;

class BibliothequeController extends Controller
{
    public function index(){
        $bibliotheque = Bibliotheque::all();
        $page = "bibliotheque";

        return view("backoffice.bibliotheque.all",compact("bibliotheque","page"));       
    }


    public function destroy($id){
        $bibliotheque = Bibliotheque::find($id);
        $bibliotheque->delete();

        return redirect()->back();       
    }


    public function edit($id){
        $bibliotheque = Bibliotheque::find($id);
        $page = "bibliotheque";

        return view("backoffice.bibliotheque.edit", compact("bibliotheque","page"));       
    }


    public function update($id, Request $request){
       $bibliotheque = Bibliotheque::find($id);
       $bibliotheque->nom = $request->nom;
       $bibliotheque->address = $request->address;
       $bibliotheque->phone = $request->phone;    
       $bibliotheque->updated_at = now();   

       $bibliotheque->save();

       return redirect()->route("bibliotheque");
    }


    public function create(){
        return view("backoffice.bibliotheque.create");
    }



    public function store(Request $request){
        $bibliotheque = new Bibliotheque;
        $bibliotheque->nom = $request->nom;
        $bibliotheque->address = $request->address; 
        $bibliotheque->phone = $request->phone;
        $bibliotheque->updated_at = now();   
 
        $bibliotheque->save();
 
        return redirect()->route("bibliotheque");
    }
}
