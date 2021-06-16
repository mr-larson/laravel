<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = Feature::paginate(5)();
        return view("backoffice.feature.all", compact("features"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize("feature-create", Feature::class);
        return view('backoffice.feature.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create", Feature::class);
        $request->validate([
            'img'=>'required',
            'h3'=>'required'
        ]);

        $feature = new feature();

        $feature->h3 = $request->h3;
        $feature->i = $request->i;
        $feature->p = $request->p;
        $feature->li1 = $request->li1;
        $feature->li2 = $request->li2;
        $feature->li3 = $request->li3;

        if ($request->file("img") !== null) {
            $feature->img = $request->file("img")->hashName();
            $request->file("img")->storePublicly("img", "public");
        }

        $feature->created_at = now();
        
        $feature->save();

        return redirect()->route('feature.index', compact('feature'))->with("message", "$feature->h3 a bien été crée.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
        return view('backoffice.feature.show', compact('feature'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        $this->authorize("feature-edit", $feature);
        return view('backoffice.feature.show', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
        $this->authorize('update', $feature);
        $request->validate([
            'img'=>'required',
            'h3'=>'required'
        ]);

        $feature->h3 = $request->h3;
        $feature->i = $request->i;
        $feature->p = $request->p;
        $feature->li1 = $request->li1;
        $feature->li2 = $request->li2;
        $feature->li3 = $request->li3;
        

        if ($request->file("img") !== null) {
            $feature->img = $request->file("img")->hashName();
            $request->file("img")->storePublicly("img", "public");
        }

        $feature->created_at = now();
        
        $feature->save();

        return redirect()->route('feature.index', compact('feature'))->with("message", "$feature->h3 a bien été crée.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        $this->authorize('delete', $feature);
        Storage::disk("public")->delete("img/" .$feature->img);
        $feature->delete();

        return redirect()->back();
    }
}
