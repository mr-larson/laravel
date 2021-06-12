<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        return view("backoffice.about.all", compact("abouts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize("about-create", About::class);
        return view("backoffice.abouts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create", About::class);

        $about = new About();
        $about->h3 = $request->h3;
        $about->p = $request->p;
        $about->li1 = $request->li1;
        $about->li2 = $request->li2;
        $about->li3 = $request->li3;
        $about->save();

        return redirect()->route("about.index")->with("successMessage", "Votre chiffre à bien été ajouté");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        $this->authorize("about-show", $about);
        return view("backoffice.about.show", compact("about"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    
    {
        $this->authorize("about-edit", $about);
        return view("backoffice.about.edit", compact("about"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $this->authorize("update", $about);
        $about->h3 = $request->h3;
        $about->p = $request->p;
        $about->li1 = $request->li1;
        $about->li2 = $request->li2;
        $about->li3 = $request->li3;
        $about->save();

        return redirect()->route("about.index")->with("successMessage", "Votre chiffre à bien été ajouté");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $this->authorize("delete", $about);
        $about->delete();
        return redirect()->back()->with("successMessage", "Votre chiffre à bien été suprimmé");
    }
}
