<?php

namespace App\Http\Controllers;

use App\Models\Yeoman;
use App\Http\Requests\StoreYeomanRequest;
use App\Http\Requests\UpdateYeomanRequest;

class YeomanController extends Controller
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
     * @param  \App\Http\Requests\StoreYeomanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreYeomanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Yeoman  $yeoman
     * @return \Illuminate\Http\Response
     */
    public function show(Yeoman $yeoman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Yeoman  $yeoman
     * @return \Illuminate\Http\Response
     */
    public function edit(Yeoman $yeoman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateYeomanRequest  $request
     * @param  \App\Models\Yeoman  $yeoman
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateYeomanRequest $request, Yeoman $yeoman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Yeoman  $yeoman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Yeoman $yeoman)
    {
        //
    }
}
