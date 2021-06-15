<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heros = Hero::all();
        $navbar = true;
        return view("backoffice.hero.all", compact("heroes", "navbar"));
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
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function edit(Hero $hero)
    {
        $this->authorize("hero-edit", $hero);
        return view("backoffice.hero.edit", compact("hero"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hero $hero)
    {
        $this->authorize("update", $hero);
        $request->validate([
            'h1'=>'required',
            'h2'=>'required',
            'img'=>'required',
        ]);

        $hero->h1 = $request->h1;
        $hero->h2 = $request->h2;

        if($request->file('img')!= null){
            Storage::disk('public')->delete("img/" . $hero->image);

            $filename = "hero-img" . '.' . $request->file('img')->getClientOriginalExtension();
            $hero->image = $filename;

            $request->file('img')->storePubliclyAs('img/', $filename , 'public');
        }

        /* if ($request->file("image") !== null) {
            $hero->image = $request->file("image")->hashName();
            $request->file("image")->storePublicly("img", "public");
        } */

        $hero->updated_at = now();
        $hero->save();

        return redirect()->route("hero.index")->with("successMessage", "Votre chiffre à bien été ajouté");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hero $hero)
    {
        //
    }
}
