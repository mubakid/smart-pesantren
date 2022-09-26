<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMadinEducationRequest;
use App\Http\Requests\UpdateMadinEducationRequest;
use App\Models\MadinEducation;

class MadinEducationController extends Controller
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
     * @param  \App\Http\Requests\StoreMadinEducationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMadinEducationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MadinEducation  $madinEducation
     * @return \Illuminate\Http\Response
     */
    public function show(MadinEducation $madinEducation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MadinEducation  $madinEducation
     * @return \Illuminate\Http\Response
     */
    public function edit(MadinEducation $madinEducation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMadinEducationRequest  $request
     * @param  \App\Models\MadinEducation  $madinEducation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMadinEducationRequest $request, MadinEducation $madinEducation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MadinEducation  $madinEducation
     * @return \Illuminate\Http\Response
     */
    public function destroy(MadinEducation $madinEducation)
    {
        //
    }
}
