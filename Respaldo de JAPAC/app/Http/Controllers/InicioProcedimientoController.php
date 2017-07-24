<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioProcedimientoController extends Controller
{
    public function getinicioprocedimiento()
    {
        return view('adminlte::layouts/InspeccionesFormales/inicioProcedimiento');
    }
}
