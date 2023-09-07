<?php

namespace App\Http\Controllers;

use App\Models\extrait;
use App\Http\Requests\StoreextraitRequest;
use App\Http\Requests\UpdateextraitRequest;

class ExtraitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('extrait');
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
    public function store(StoreextraitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(extrait $extrait)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(extrait $extrait)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateextraitRequest $request, extrait $extrait)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(extrait $extrait)
    {
        //
    }
}
