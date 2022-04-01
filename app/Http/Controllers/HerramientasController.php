<?php

namespace App\Http\Controllers;

use App\Models\Herramientas;
use App\Http\Requests\StoreHerramientasRequest;
use App\Http\Requests\UpdateHerramientasRequest;

class HerramientasController extends Controller
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
     * @param  \App\Http\Requests\StoreHerramientasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHerramientasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Herramientas  $herramientas
     * @return \Illuminate\Http\Response
     */
    public function show(Herramientas $herramientas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Herramientas  $herramientas
     * @return \Illuminate\Http\Response
     */
    public function edit(Herramientas $herramientas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHerramientasRequest  $request
     * @param  \App\Models\Herramientas  $herramientas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHerramientasRequest $request, Herramientas $herramientas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Herramientas  $herramientas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Herramientas $herramientas)
    {
        //
    }
}
