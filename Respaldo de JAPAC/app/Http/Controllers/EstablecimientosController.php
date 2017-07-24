<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class EstablecimientosController extends Controller
{
    public function getestablecimientos()
    {
        return view('adminlte::establecimientos');
    } 

}