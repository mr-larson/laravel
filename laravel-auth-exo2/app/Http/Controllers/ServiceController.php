<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services= Service::all();
        return view("backoffice.service.all", compact("services"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.service.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service();
        $service->title = $request->title;
        $service->text = $request->text;
        $service->icon = $request->icon;
        $service->shape = $request->shape;

        $service->save();
         
        return redirect()->route("service.index")->with("successMessage", "Votre à bien été ajouté");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view("backoffice.service.show", compact("service"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view("backoffice.service.edit", compact("service"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $service->title = $request->title;
        $service->text = $request->text;
        $service->icon = $request->icon;
        $service->shape = $request->shape;

        $service->save();

        return redirect()->route("service.index")->with("successMessage", "Votre à bien été modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back()->with("successMessage", "Votre service à bien été suprimmé");
    }
}
