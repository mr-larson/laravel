<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Genre;
use App\Models\Joueur;
use App\Models\Photo;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JoueurController extends Controller
{
    /**{{  }}
     * Display a listing of the resource.
     *
     * @return \{{ Illu }}minate\Http\Response
     */
    public function index()
    {
        $joueurs = Joueur::paginate(9);
        return view("backoffice.joueur.all",compact("joueurs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        $roles = Role::all();
        $equipes = Equipe::all();
        return view("backoffice.joueur.create", compact('roles', "genres", "equipes"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            "age" => "required",
            'phone' => 'required',
            'email' => 'required',
            'genre_id' => 'required',
            'origine' => 'required',
            'role_id' => 'required',
            'equipe_id' => 'required',
        ]);
        $joueur = new joueur;
        $photo = new Photo;
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->age = $request->age;
        $joueur->phone = $request->phone;
        $joueur->email = $request->email;
        $joueur->genre_id = $request->genre_id;
        $joueur->origine = $request->origine;
        $joueur->role_id = $request->role_id;
        $joueur->equipe_id = $request->equipe_id;
        $joueur->created_at = now();

        $joueur->save();

        // CREATION AUSSI DE LA PHOTO DU JOUEUR QUI EST DANS UNE AUTRE TABLE
        // ET QUI EST LIÉ A CETTE TABLE
        $photo->image = $request->file('image')->hashname();
        $request->file('image')->storePublicly("img/players", "public");
        $photo->joueur_id = $joueur->id;
        $photo->created_at = now();

        $photo->save();

        return redirect()->route("joueur.index")->with('successMessage', "Le joueur  à bien été crée");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function show(Joueur $joueur)
    {
        return view("backoffice.joueur.show",compact("joueur"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function edit(Joueur $joueur)
    {
        $genres = Genre::all();
        $roles = Role::all();
        $equipes = Equipe::all();
        return view("backoffice.joueur.edit",compact('roles', "genres", "equipes","joueur"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Joueur $joueur)
    {

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            "age" => "required",
            'phone' => 'required',
            'email' => 'required',
            'genre_id' => 'required',
            'origine' => 'required',
            'role_id' => 'required',
            'equipe_id' => 'required',
        ]);
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->age = $request->age;
        $joueur->phone = $request->phone;
        $joueur->email = $request->email;
        $joueur->genre_id = $request->genre_id;
        $joueur->origine = $request->origine;
        $joueur->role_id = $request->role_id;
        $joueur->equipe_id = $request->equipe_id;
        $joueur->updated_at = now();    

        $joueur->save();
        // dd($joueur->photo->id)->get();
        $photo = Photo::find($joueur->photo->id);

        if($request->file('image')!=null){
            Storage::disk('public')->delete("img/players" . $photo->image);
            $photo->image = $request->file('image')->hashname();
            $request->file('image')->storePublicly("img/players", "public");
            $photo->updated_at = now();
        }

        $photo->save();

        return redirect()->route("joueur.index")->with('successMessage', "Le joueur $joueur->prenom $joueur->nom à bien été modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joueur $joueur)
    {
        Storage::disk('public')->delete("img/players" . $joueur->photo);
        $joueur->delete();
        return redirect()->back()->with('successMessage', "Le joueur à bien été supprimé");
    }
}
