<?php

namespace App\Http\Controllers;

use App\Models\citoyen;
use App\Http\Requests\StorecitoyenRequest;
use App\Http\Requests\UpdatecitoyenRequest;

class CitoyenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('gestion.citoyen');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('gestion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecitoyenRequest $request)
    {
        citoyen::create($request->all());
        return redirect()->route('gestion')->with('succes',('citoyen ajouté avec succes'));
    }

    /**
     * Display the specified resource.
     */
    public function show(citoyen $citoyen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(citoyen $citoyen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecitoyenRequest $request, citoyen $citoyen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(citoyen $citoyen)
    {
        //
    }
}
