<?php

namespace App\Http\Controllers;

use App\Models\TeachedTime;
use App\Http\Requests\StoreTeachedTimeRequest;
use App\Http\Requests\UpdateTeachedTimeRequest;

class TeachedTimeController extends Controller
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
     * @param  \App\Http\Requests\StoreTeachedTimeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeachedTimeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeachedTime  $teachedTime
     * @return \Illuminate\Http\Response
     */
    public function show(TeachedTime $teachedTime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeachedTime  $teachedTime
     * @return \Illuminate\Http\Response
     */
    public function edit(TeachedTime $teachedTime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeachedTimeRequest  $request
     * @param  \App\Models\TeachedTime  $teachedTime
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeachedTimeRequest $request, TeachedTime $teachedTime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeachedTime  $teachedTime
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeachedTime $teachedTime)
    {
        //
    }
}
