<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function index(){
        $livre = Livre::all();
        $page = "livre";

        return view("backoffice.livre.all",compact("livre","page"));       
    }


    public function destroy($id){
        $livre = Livre::find($id);
        $livre->delete();

        return redirect()->back();       
    }


    public function edit($id){
        $livre = Livre::find($id);
        $page = "livre";

        return view("backoffice.livre.edit", compact("livre","page"));       
    }


    public function update($id, Request $request){
       $livre = Livre::find($id);
       $livre->titre = $request->titre;
       $livre->auteur = $request->auteur;
       $livre->date = $request->date; 
       $livre->page = $request->page;
       $livre->mobile = $request->mobile;   
       $livre->updated_at = now();   

       $livre->save();

       return redirect()->route("livre");
    }


    public function create(){
        return view("backoffice.livre.create");
    }



    public function store(Request $request){
        $livre = new Livre;
        $livre->titre = $request->titre;
        $livre->auteur = $request->auteur; 
        $livre->date = $request->date;
        $livre->page = $request->page; 
        $livre->mobile = $request->mobile;
        $livre->updated_at = now();   
 
        $livre->save();
 
        return redirect()->route("livre");
    }
}
