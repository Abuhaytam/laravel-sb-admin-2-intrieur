<?php

namespace App\Http\Controllers;

use App\Models\mariage;
use App\Http\Requests\StoremariageRequest;
use App\Http\Requests\UpdatemariageRequest;

class MariageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('mariage');
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
    public function store(StoremariageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(mariage $mariage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mariage $mariage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemariageRequest $request, mariage $mariage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mariage $mariage)
    {
        //
    }
}
