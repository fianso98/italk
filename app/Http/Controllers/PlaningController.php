<?php

namespace App\Http\Controllers;

use App\Models\Planing;
use App\Http\Requests\StorePlaningRequest;
use App\Http\Requests\UpdatePlaningRequest;

class PlaningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePlaningRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlaningRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Planing  $planing
     * @return \Illuminate\Http\Response
     */
    public function show(Planing $planing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Planing  $planing
     * @return \Illuminate\Http\Response
     */
    public function edit(Planing $planing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlaningRequest  $request
     * @param  \App\Models\Planing  $planing
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlaningRequest $request, Planing $planing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Planing  $planing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Planing $planing)
    {
        //
    }
}
