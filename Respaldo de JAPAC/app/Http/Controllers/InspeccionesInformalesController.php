<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InspeccionesInformalesController extends Controller
{
    public function getinspeccionesinformales()
    {
        return view('adminlte::inspeccionesInformales');
    } 
}
