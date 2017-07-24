<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioProcedimientoLabExternosController extends Controller
{
    public function getinicioprocedimientolabexternos()
    {
        return view('adminlte::layouts/LaboratoriosExternos/inicioProcedimientoLabExternos');
    }
}

