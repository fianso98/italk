<?php

namespace App\Http\Controllers;

use App\Models\TeacherPlaning;
use App\Http\Requests\StoreTeacherPlaningRequest;
use App\Http\Requests\UpdateTeacherPlaningRequest;

class TeacherPlaningController extends Controller
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
     * @param  \App\Http\Requests\StoreTeacherPlaningRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacherPlaningRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeacherPlaning  $teacherPlaning
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherPlaning $teacherPlaning)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeacherPlaning  $teacherPlaning
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherPlaning $teacherPlaning)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeacherPlaningRequest  $request
     * @param  \App\Models\TeacherPlaning  $teacherPlaning
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeacherPlaningRequest $request, TeacherPlaning $teacherPlaning)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeacherPlaning  $teacherPlaning
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeacherPlaning $teacherPlaning)
    {
        //
    }
}
