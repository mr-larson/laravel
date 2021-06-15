<?php

namespace App\Http\Controllers;

use App\Models\AboutText;
use Illuminate\Http\Request;

class AboutTextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutTexts = AboutText::paginate(5);
        $navbar = true;
        return view("backoffice.aboutText.all", compact("about_texts", "navbar"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', AboutText::class);
        return view('backoffice.aboutText.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', AboutText::class);

        $request->validate([
            'icon'=>'required',
            'h4'=>'required',
            'p'=>'required'
        ]);

        $aboutText = new AboutText();

        $aboutText->icon = $request->icon;
        $aboutText->h4 = $request->h4;
        $aboutText->p = $request->p;
        $aboutText->updated_at = now();
        
        $aboutText->save();

        return redirect()->route('aboutText.index', compact('aboutText'))->with("message", "$aboutText->h4 a bien été crée.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutText  $aboutText
     * @return \Illuminate\Http\Response
     */
    public function show(AboutText $aboutText)
    {
        return view('backoffice.aboutText.show', compact('aboutText'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutText  $aboutText
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutText $aboutText)
    {
        $this->authorize('update', $aboutText);
        return view("backoffice.aboutText.edit", compact('aboutText'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutText  $aboutText
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutText $aboutText)
    {
        $request->validate([
            'icon'=>'required',
            'h4'=>'required',
            'p'=>'required'
        ]);

        $aboutText->icon = $request->icon;
        $aboutText->h4 = $request->h4;
        $aboutText->p = $request->p;
        $aboutText->updated_at = now();
        
        $aboutText->save();

        return redirect()->route('aboutText.index', compact('aboutText'))->with("message", "$aboutText->h4 a bien été crée.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutText  $aboutText
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutText $aboutText)
    {
        $this->authorize('delete', $aboutText);
        $aboutText->delete();

        return redirect()->back();
    }
}
