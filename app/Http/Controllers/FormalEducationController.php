<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormalEducationRequest;
use App\Http\Requests\UpdateFormalEducationRequest;
use App\Models\FormalEducation;

class FormalEducationController extends Controller
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
     * @param  \App\Http\Requests\StoreFormalEducationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormalEducationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormalEducation  $formalEducation
     * @return \Illuminate\Http\Response
     */
    public function show(FormalEducation $formalEducation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormalEducation  $formalEducation
     * @return \Illuminate\Http\Response
     */
    public function edit(FormalEducation $formalEducation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormalEducationRequest  $request
     * @param  \App\Models\FormalEducation  $formalEducation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormalEducationRequest $request, FormalEducation $formalEducation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormalEducation  $formalEducation
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormalEducation $formalEducation)
    {
        //
    }
}
