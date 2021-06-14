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
        return view("backoffice.hero.all", compact("heroes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize("hero-create", Hero::class);
    
        return view("backoffice.hero.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("update", Hero::class);
        $hero = new Hero();
        $hero->h1 = $request->h1;
        $hero->h2 = $request->h2;
        $hero->img = $request->file('img')->hashName();
        $request->file('img')->storePublicly("img/heroes","public");
        $hero->save();

        return redirect()->route("hero.index")->with("successMessage", "Votre chiffre à bien été ajouté");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
        $this->authorize("view", $hero);
        return view("backoffice.hero.show", compact("hero"));
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
        $hero->h1 = $request->h1;
        $hero->h2 = $request->h2;

        if($request->file('img')!= null){
            // $filename = $request->file('image')->getClientOriginalName();
            Storage::disk('public')->delete("img/" . $hero->image);

            $filename = "hero-img" . '.' . $request->file('img')->getClientOriginalExtension();
            $hero->image = $filename;

            $request->file('img')->storePubliclyAs('img/', $filename , 'public');
        }

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
        $this->authorize("delete", $hero);
        $hero->delete();
        return redirect()->back()->with("successMessage", "Votre chiffre à bien été suprimmé");
    }
}
