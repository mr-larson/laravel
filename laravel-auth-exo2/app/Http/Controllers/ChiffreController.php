<?php

namespace App\Http\Controllers;

use App\Models\Chiffre;
use Illuminate\Http\Request;

class ChiffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chiffres = Chiffre::all();
        return view("backoffice.counts.all", compact("chiffres"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize("chiffre-create", Chiffre::class);
        return view("backoffice.counts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create", Chiffre::class);
        $chiffre = new Chiffre();
        $chiffre->figure = $request->figure;
        $chiffre->text = $request->text;
        $chiffre->save();

        return redirect()->route("chiffre.index")->with("successMessage", "Votre chiffre à bien été ajouté");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chiffre  $chiffre
     * @return \Illuminate\Http\Response
     */
    public function show(Chiffre $chiffre)
    {
        return view("backoffice.counts.show", compact("chiffre"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chiffre  $chiffre
     * @return \Illuminate\Http\Response
     */
    public function edit(Chiffre $chiffre)
    {
        $this->authorize("chiffre-edit", $chiffre);
        return view("backoffice.counts.edit", compact("chiffre"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chiffre  $chiffre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chiffre $chiffre)
    {
        $this->authorize("update", $chiffre);
        $chiffre->figure = $request->figure;
        $chiffre->text = $request->text;

        $chiffre->save();
        return redirect()->route("chiffre.index")->with("successMessage", "Votre chiffre à bien été modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chiffre  $chiffre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chiffre $chiffre)
    {
        $this->authorize("update", $chiffre);
        $chiffre->delete();
        return redirect()->back()->with("successMessage", "Votre chiffre à bien été suprimmé");
    }
}
