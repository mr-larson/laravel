<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(2);
        $page = "article";
        return view("backoffice.article.all",compact("page", "articles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $commentaires = Commentaire::all();
        return view("backoffice.article.create", compact("albums"));
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
	        'image' => 'required',
            'categorie'=>"required|max:50",
	        'description' => 'required|max:255',
	    ]);
        $article = new article;
        $article->nom = $request->nom;
        $article->image = $request->file("image")->hashName();
        $article->categorie = $request->categorie;
        $article->description = $request->description;
        $article->commentaire_id = $request->commentaire_id;
        $article->created_at = now();   
 
        $article->save();
        $request->file('image')->storePublicly('img', 'public');
        return redirect()->route('article.index')->with('message', 'The success message!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(article $article)
    {
        
        $page = "article";
        return view('backoffice.article.show',compact('article',"page"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(article $article)
    {
        $commentaires = Commentaire::all();
        return view("backoffice.article.edit", compact('article',"commentaires"));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, article $article)
    {
        $request->validate([
	        'nom' => 'required|max:30',
	        'image' => 'required',
            'categorie'=>"required|max:50",
	        'description' => 'required|max:255',
	    ]);

       $article->nom = $request->nom;
       if ($request->file("lien") != null){
           Storage::disk('public')->delete('img/' . $article->image);
           $article->image = $request->file("image")->hashName();
           $request->file('image')->storePublicly('img', 'public'); 
       }
       $article->categorie = $request->categorie;
       $article->description = $request->description;
       $article->commentaire_id = $request->commentaire_id;    
       $article->updated_at = now();   

       $article->save();
       return redirect()->route("article.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(article $article)
    {
        Storage::disk('public')->delete('img/' . $article->image);
        $article->delete();
        return redirect()->back(); 
    }

    public function download($id) {
        $article = article::find($id);
        return Storage::disk("public")->download("img/" . $article->image);
    }
}
