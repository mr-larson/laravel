<?php

namespace App\Http\Controllers;

use App\Models\Adresse;
use Illuminate\Http\Request;

class AdresseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adresses = Adresse::all();
        $navbar = true;
        return view("backoffice.adresse.all", compact("adresses", "navbar"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adresse  $adresse
     * @return \Illuminate\Http\Response
     */
    public function show(Adresse $adresse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adresse  $adresse
     * @return \Illuminate\Http\Response
     */
    public function edit(Adresse $adresse)
    {
        $this->authorize("adresse-edit", $adresse);
        return view("backoffice.adresse.edit", compact("adresse"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adresse  $adresse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adresse $adresse)
    {
        $this->authorize("update", $adresse);
        $request->validate([
            "rue"=>'required',
            "ville"=>'required',
            "pays"=>'required',
            "phone"=>'required',
            "email"=>'required'
        ]);

        $adresse->rue = $request->rue;
        $adresse->ville = $request->ville;
        $adresse->pays = $request->pays;
        $adresse->phone = $request->phone;
        $adresse->email = $request->email;
        $adresse->phone2 = $request->phone2;
        $adresse->email2 = $request->email2;

        $adresse->updated_at = now();
        $adresse->save();

        return redirect()->route("adresse.index")->with("successMessage", "Votre chiffre à bien été ajouté");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adresse  $adresse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adresse $adresse)
    {
        //
    }
}
