<?php

namespace App\Http\Controllers;

use App\Models\deces;
use App\Http\Requests\StoredecesRequest;
use App\Http\Requests\UpdatedecesRequest;

class DecesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            return view ('deces');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoredecesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(deces $deces)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(deces $deces)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedecesRequest $request, deces $deces)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(deces $deces)
    {
        //
    }
}
