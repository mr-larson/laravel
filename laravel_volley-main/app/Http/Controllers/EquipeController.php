<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Equipe;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\BinaryOp\Equal;




class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $page = "equipe";
    public function index()
    {   
        $equipes = Equipe::paginate(8); 
        return view("backoffice.equipe.all",compact("equipes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $continents = Continent::all();
        return view("backoffice.equipe.create",compact("continents"));
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
            'club' => 'required',
            'ville' => 'required',
            'pays' => 'required',
            'max_joueurs' => 'required',
            'continent_id' => 'required',
        ]);
        $equipe = new Equipe;

        if($request->file('logo')!= null){
            $equipe->logo = $request->file('logo')->hashName();
            $request->file('logo')->storePublicly("img/clubs","public");
        }

        $equipe->club = $request->club;
        $equipe->ville = $request->ville;
        $equipe->pays = $request->pays;
        $equipe->max_joueurs = $request->max_joueurs;
        $equipe->att = 2;
        $equipe->mc = 2;
        $equipe->df = 2;
        $equipe->rc = 3;
        $equipe->continent_id = $request->continent_id;
        $equipe->created_at = now();
        $equipe->save();

        return redirect()->route('equipe.index')->with('sucessMessage', "L'équipe $equipe->nom a bien été crée");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function show(Equipe $equipe)
    {
       
        return view("backoffice.equipe.show",compact("equipe"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipe $equipe)
    {
        $continents = Continent::all();
        return view("backoffice.equipe.edit",compact("continents","equipe"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipe $equipe)
    {
        $request->validate([
            'club' => 'required',
            'ville' => 'required',
            'pays' => 'required',
            'max_joueurs' => 'required',
            'continent_id' => 'required',
        ]);
        
        if($request->file('logo')!= null){
            $equipe->logo = $request->file('logo')->hashName();
            $request->file('logo')->storePublicly("img/clubs","public");
            Storage::disk('public')->delete("img/clubs" . $equipe->logo);
        }
        $equipe->club = $request->club;
        $equipe->ville = $request->ville;
        $equipe->pays = $request->pays;
        $equipe->max_joueurs = $request->max_joueurs;
        $equipe->att = 2;
        $equipe->mc = 2;
        $equipe->df = 2;
        $equipe->rc = 3;
        $equipe->continent_id = $request->continent_id;
        $equipe->save();
        return redirect()->route("equipe.index")->with('successMessage', "L'équipe à bien été modifié");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipe $equipe)
    {
        if($equipe->club=="aucun"){
            return redirect()->back();
        }

        foreach ($equipe->joueurs as $joueur){
            // Where ne retourne rien en soi mais si on dit get il toujours un tableau 
            // donc dans notre exemple on fait first pour retourner le premier element 
            // du tableau que where retourne 
            $joueur->equipe_id = Equipe::where('club', 'aucun')->first()->id;
            $joueur->save();
        };
        $equipe->delete();

        Storage::disk('public')->delete("img/clubs" . $equipe->logo);
       

        return redirect()->back()->with('successMessage', "L'equipe à bien été supprimé");
    }
}
