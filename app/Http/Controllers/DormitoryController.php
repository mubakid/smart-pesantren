<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDormitoryRequest;
use App\Http\Requests\UpdateDormitoryRequest;
use App\Models\Dormitory;

class DormitoryController extends Controller
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
     * @param  \App\Http\Requests\StoreDormitoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDormitoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dormitory  $dormitory
     * @return \Illuminate\Http\Response
     */
    public function show(Dormitory $dormitory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dormitory  $dormitory
     * @return \Illuminate\Http\Response
     */
    public function edit(Dormitory $dormitory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDormitoryRequest  $request
     * @param  \App\Models\Dormitory  $dormitory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDormitoryRequest $request, Dormitory $dormitory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dormitory  $dormitory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dormitory $dormitory)
    {
        //
    }
}
