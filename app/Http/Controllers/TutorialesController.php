<?php

namespace App\Http\Controllers;

use App\Models\Tutoriales;
use App\Http\Requests\StoreTutorialesRequest;
use App\Http\Requests\UpdateTutorialesRequest;

class TutorialesController extends Controller
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
     * @param  \App\Http\Requests\StoreTutorialesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTutorialesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tutoriales  $tutoriales
     * @return \Illuminate\Http\Response
     */
    public function show(Tutoriales $tutoriales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tutoriales  $tutoriales
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutoriales $tutoriales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTutorialesRequest  $request
     * @param  \App\Models\Tutoriales  $tutoriales
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTutorialesRequest $request, Tutoriales $tutoriales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tutoriales  $tutoriales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutoriales $tutoriales)
    {
        //
    }
}
