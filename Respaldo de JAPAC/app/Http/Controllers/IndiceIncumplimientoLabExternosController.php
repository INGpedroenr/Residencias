<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndiceIncumplimientoLabExternosController extends Controller
{
    public function getindiceincumplimientolabexternos()
    {
        return view('adminlte::layouts/LaboratoriosExternos/indiceIncumplimientoLabExternos');
    }
}
