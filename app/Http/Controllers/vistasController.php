<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vistasController extends Controller
{
    public function index()
    {
        return view('layout.index');
    }	

    public function fundamentos()
    {
        return view('layout.fundamentals');
    }
    
    public function implementacion()
    {
        return view('layout.implementation');
    }	

    public function generador()
    {
        return view('layout.generator');
    }	

    public function api()
    {
        return view('layout.api');
    }
    
    public function tutorial()
    {
        return view('layout.tutorials');
    }
}
