<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class albumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::paginate(2);
        $page = "album";
        return view("backoffice.album.all",compact("page", "albums"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.album.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
	        'nom' => 'required|max:30',
	        'description' => 'required|max:255',
	    ]);
        $album = new Album;
        $album->nom = $request->nom;
        $album->description = $request->description;
        $album->created_at = now();   
 
        $album->save();
        return redirect()->route('album.index')->with('message', 'The success message!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        
        $page = "album";
        return view('backoffice.album.show',compact('album',"page"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        $page = "album";
        return view("backoffice.album.edit", compact("album","page"));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        $request->validate([
	        'nom' => 'required|max:30',
	        'description' => 'required|max:255',
	    ]);

       $album->nom = $request->nom;
       $album->description = $request->description;    
       $album->updated_at = now();   

       $album->save();
       return redirect()->route("album.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->back(); 
    }
    
}
