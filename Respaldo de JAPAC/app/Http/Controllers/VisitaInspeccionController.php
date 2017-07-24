<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitaInspeccionController extends Controller
{
    public function getvisitainspeccion()
    {
        return view('adminlte::layouts/InspeccionesFormales/visitaInspeccion');
    } 
}
