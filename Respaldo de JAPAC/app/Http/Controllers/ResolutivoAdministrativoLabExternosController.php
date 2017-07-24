<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResolutivoAdministrativoLabExternosController extends Controller
{
    public function getresolutivoadministrativolabexternos()
    {
        return view('adminlte::layouts/LaboratoriosExternos/resolutivoAdministrativoLabExternos');
    }
}
