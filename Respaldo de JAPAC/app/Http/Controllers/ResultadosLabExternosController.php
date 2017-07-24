<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultadosLabExternosController extends Controller
{
    public function getresultadoslabexternos()
    {
        return view('adminlte::layouts/LaboratoriosExternos/resultadosLabExternos');
    }
}
