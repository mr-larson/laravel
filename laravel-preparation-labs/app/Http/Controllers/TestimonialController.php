<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(4);
        return view("backoffice.testimonial.all", compact("testimonials"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize("testimonial-create", Testimonial::class);
        return view('backoffice.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create", Testimonial::class);
        $request->validate([
            'p'=>'required',
            'img'=>'required',
            'h3'=>'required',
            'h4'=>'required'
        ]);

        $testimonial = new Testimonial();

        $testimonial->p = $request->p;
        $testimonial->img = $request->img;
        $testimonial->h3 = $request->h3;
        $testimonial->h4 = $request->h4;

        if ($request->file("img") !== null) {
            $testimonial->img = $request->file("img")->hashName();
            $request->file("img")->storePublicly("img", "public");
        }

        $testimonial->created_at = now();
        
        $testimonial->save();

        return redirect()->route('testimonial.index', compact('testimonial'))->with("message", "$testimonial->h3 a bien été crée.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view('backoffice.testimonial.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        $this->authorize("testimonial-edit", $testimonial);
        return view('backoffice.testimonial.show', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $this->authorize('update', $testimonial);
        $request->validate([
            'p'=>'required',
            'img'=>'required',
            'h3'=>'required',
            'h4'=>'required'
        ]);

        $testimonial->p = $request->p;
        $testimonial->img = $request->img;
        $testimonial->h3 = $request->h3;
        $testimonial->h4 = $request->h4;

        if ($request->file("img") !== null) {
            $testimonial->img = $request->file("img")->hashName();
            $request->file("img")->storePublicly("img", "public");
        }

        $testimonial->created_at = now();
        
        $testimonial->save();

        return redirect()->route('testimonial.index', compact('testimonial'))->with("message", "$testimonial->h3 a bien été crée.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $this->authorize('delete', $testimonial);
        Storage::disk("public")->delete("img/" .$testimonial->img);
        $testimonial->delete();

        return redirect()->back();
    }
}
