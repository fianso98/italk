<?php

namespace App\Http\Controllers;

use App\Models\CourseStructure;
use App\Http\Requests\StoreCourseStructureRequest;
use App\Http\Requests\UpdateCourseStructureRequest;

class CourseStructureController extends Controller
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
     * @param  \App\Http\Requests\StoreCourseStructureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourseStructureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseStructure  $courseStructure
     * @return \Illuminate\Http\Response
     */
    public function show(CourseStructure $courseStructure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseStructure  $courseStructure
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseStructure $courseStructure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCourseStructureRequest  $request
     * @param  \App\Models\CourseStructure  $courseStructure
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCourseStructureRequest $request, CourseStructure $courseStructure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseStructure  $courseStructure
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseStructure $courseStructure)
    {
        //
    }
}
