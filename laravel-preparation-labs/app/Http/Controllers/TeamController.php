<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Titre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $titres = Titre::all();
        $teams = Team::all();
        return view("backoffice.team.all", compact("teams", "titres", "users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize("team-create", Team::class);
        return view('backoffice.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create", Team::class);

        $team = new Team();

        $team->twitter = $request->twitter;
        $team->facebook = $request->facebook;
        $team->insta = $request->insta;
        $team->link = $request->link;

        if ($request->file("img") !== null) {
            $team->img = $request->file("img")->hashName();
            $request->file("img")->storePublicly("img", "public");
        }

        $team->created_at = now();
        
        $team->save();

        return redirect()->route('team.index', compact('team'))->with("message", "vos info ont bien été crée.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('backoffice.team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $this->authorize("team-edit", $team);
        return view('backoffice.team.show', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $this->authorize("update", $team);

        $team->twitter = $request->twitter;
        $team->facebook = $request->facebook;
        $team->insta = $request->insta;
        $team->link = $request->link;

        if ($request->file("img") !== null) {
            $team->img = $request->file("img")->hashName();
            $request->file("img")->storePublicly("img", "public");
        }

        $team->created_at = now();
        
        $team->save();

        return redirect()->route('team.index', compact('team'))->with("message", "vos info ont bien été crée.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $this->authorize('delete', $team);
        Storage::disk("public")->delete("img/" .$team->img);
        $team->delete();

        return redirect()->back();
    }
}
