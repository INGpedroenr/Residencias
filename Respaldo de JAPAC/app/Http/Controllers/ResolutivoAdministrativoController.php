<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResolutivoAdministrativoController extends Controller
{
   	public function getresolutivoadministrativo()
    {
        return view('adminlte::layouts/InspeccionesFormales/resolutivoAdministrativo');
    }
}
