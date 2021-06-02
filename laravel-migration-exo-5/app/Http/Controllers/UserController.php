<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //function "index" sert à prendre tous les elements du model et les envoyer vers une blade
    public function index(){
        // créer une variable qui stock toutes les données qu'il y a dans la table "user", et puis on l'envoi dans la blade "user"
        $users = User::all();
        return view("user", compact("users"));
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->back();
    }

}
