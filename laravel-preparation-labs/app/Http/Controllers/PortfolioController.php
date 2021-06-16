<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::paginate(4);
        $navbar = true;
        return view("backoffice.portfolio.all", compact("portfolios", "navbar"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize("portfolio-create", Portfolio::class);
        return view('backoffice.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create", Portfolio::class);
        $request->validate([
            'img'=>'required',
            'h4'=>'required',
            'p'=>'required'
        ]);

        $portfolio = new Portfolio();

        $portfolio->h4 = $request->h4;
        $portfolio->p = $request->p;

        if ($request->file("img") !== null) {
            $portfolio->img = $request->file("img")->hashName();
            $request->file("img")->storePublicly("img", "public");
        }

        $portfolio->created_at = now();
        
        $portfolio->save();

        return redirect()->route('portfolio.index', compact('portfolio'))->with("message", "$portfolio->h4 a bien été crée.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        return view('backoffice.portfolio.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        $this->authorize("portfolio-edit", $portfolio);
        return view('backoffice.portfolio.show', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $this->authorize('update', $portfolio);
        $request->validate([
            'img'=>'required',
            'h3'=>'required'
        ]);

        $portfolio->h3 = $request->h3;
        $portfolio->i = $request->i;
        $portfolio->p = $request->p;
        $portfolio->li1 = $request->li1;
        $portfolio->li2 = $request->li2;
        $portfolio->li3 = $request->li3;
        

        if ($request->file("img") !== null) {
            $portfolio->img = $request->file("img")->hashName();
            $request->file("img")->storePublicly("img", "public");
        }

        $portfolio->created_at = now();
        
        $portfolio->save();

        return redirect()->route('portfolio.index', compact('portfolio'))->with("message", "$portfolio->h3 a bien été crée.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $this->authorize('delete', $portfolio);
        Storage::disk("public")->delete("img/" .$portfolio->img);
        $portfolio->delete();

        return redirect()->back();
    }
}
