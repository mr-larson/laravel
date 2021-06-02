<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commentaires = Commentaire::paginate(2);
        $page = "commentaire";
        return view("backoffice.commentaire.all",compact("page", "commentaires"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = Article::all();
        return view("backoffice.commentaire.create", compact("article"));
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
	        'email' => 'required',
            'message'=>"required|max:255",
	    ]);
        $commentaire = new Commentaire;
        $commentaire->nom = $request->nom;
        $commentaire->email = $request->email;
        $commentaire->message = $request->message;
        $commentaire->article_id = $request->article;
        $commentaire->created_at = now();   
 
        $commentaire->save();
        return redirect()->route('commentaire.index')->with('message', 'The success message!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function show(Commentaire $commentaire)
    {
        
        $page = "commentaire";
        return view('backoffice.commentaire.show',compact('commentaire',"page"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaire $commentaire)
    {
        $articles = Article::all();
        return view("backoffice.commentaire.edit", compact('commentaire',"articles"));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commentaire $commentaire)
    {
        $request->validate([
	        'nom' => 'required|max:30',
	        'email' => 'required',
	        'message' => 'required|max:255',
	    ]);

       $commentaire->nom = $request->nom;
       $commentaire->email = $request->email;
       $commentaire->message = $request->message;
       $commentaire->article_id = $request->article_id;    
       $commentaire->updated_at = now();   

       $commentaire->save();
       return redirect()->route("commentaire.index");
    }


}
