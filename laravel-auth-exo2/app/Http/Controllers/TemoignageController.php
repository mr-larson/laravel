<?php

namespace App\Http\Controllers;

use App\Models\Temoignage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TemoignageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temoignages = Temoignage::all();
        return view("backoffice.temoignage.all", compact("temoignages"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.temoignage.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $temoignage = new Temoignage();

        $temoignage->text = $request->text;
        $temoignage->author = $request->author;
        $temoignage->position = $request->position;
        $temoignage->photo = $request->file('photo')->hashName();
        $request->file('photo')->storePublicly("img/testimonials","public");

        return redirect()->route("temoignage.index")->with("successMessage", "Le temoignage de $temoignage->author à bien été ajouté");


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function show(Temoignage $temoignage)
    {
        return view("backoffice.temoignage.show", compact("temoignage"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function edit(Temoignage $temoignage)
    {
        return view("backoffice.temoignage.edit", compact("temoignage"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Temoignage $temoignage)
    {
        $temoignage->text = $request->text;
        $temoignage->author = $request->author;
        $temoignage->position = $request->position;

        if($request->file('logo')!= null){
            $temoignage->photo = $request->file('photo')->hashName();
            $request->file('photo')->storePublicly("img/testimonials","public");
        }
        return redirect()->route("temoignage.index")->with("successMessage", "Le temoignage de $temoignage->author à bien été modifié");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Temoignage $temoignage)
    {
        Storage::disk('public')->delete("img/testimonials" . $temoignage->photo);
        $temoignage->delete();

        return redirect()->back()->with("successMessage", "Le temoignage à bien été modifié");

    }
}
