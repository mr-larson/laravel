<?php

namespace App\Http\Controllers;

use App\Models\AboutTitre;
use Illuminate\Http\Request;

class AboutTitreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutTitre = AboutTitre::first();
        $navbar = true;
        return view("backoffice.aboutTitre.all", compact("aboutTitre", "navbar"));
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
     * @param  \App\Models\AboutTitre  $aboutTitre
     * @return \Illuminate\Http\Response
     */
    public function show(AboutTitre $aboutTitre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutTitre  $aboutTitre
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutTitre $aboutTitre)
    {
        $this->authorize("aboutTitre-edit", $aboutTitre);
        return view("backoffice.aboutTitre.edit", compact("about_titre"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutTitre  $aboutTitre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutTitre $aboutTitre)
    {
        $this->authorize("update", $aboutTitre);
        $request->validate([
            'h3'=>'required',
            'p'=>'required',
        ]);

        $aboutTitre->h3 = $request->h3;
        $aboutTitre->p = $request->p;

        $aboutTitre->updated_at = now();
        $aboutTitre->save();

        return redirect()->route("aboutTitre.index")->with("successMessage", "Votre chiffre à bien été ajouté");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutTitre  $aboutTitre
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutTitre $aboutTitre)
    {
        //
    }
}
