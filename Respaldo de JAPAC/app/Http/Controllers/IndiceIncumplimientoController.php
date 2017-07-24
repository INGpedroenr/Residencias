<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndiceIncumplimientoController extends Controller
{
    public function getindiceincumplimiento()
    {
        return view('adminlte::layouts/InspeccionesFormales/indiceIncumplimiento');
    }
}
