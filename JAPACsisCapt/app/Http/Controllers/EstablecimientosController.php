<?php

namespace JAPACsisCapt\Http\Controllers;

use Illuminate\Http\Request;
use JAPACsisCapt\app\Establecimientos;
use Illuminate\Support\Facades\Redirect;
use JAPACsisCapt\Http\Request\EstablecimientosFormRequest;
use DB;

class EstablecimientosController extends Controller
{
    public function __construct()
    {

    }
    public function index (Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$establecimientos=DB::table('establecimientos')->where('razon_social','LIKE','%'.$query.'%')
    		->orderBy('id','desc')
    		->paginate(7);
    		return viwe ('establecimientos.index',["establecimientos"=> $establecimientos,"searchText"=>$query]);
    	}
    }
    public function create ()
    {
    	return view ('establecimientos.create');
    }
    public function store (EstablecimientosFormRequest $Request) 
    {
    	$establecimientos=new Establecimientos;
    	$establecimientos->nombre_establecimiento=$request->get('nombre_establecimiento');
    	$establecimientos->razon_social=$request->get('razon_social');
    	$establecimientos->rfc=$request->get('rfc)';
    	$establecimientos->actividad=$request->get('actividad');
    	$establecimientos->calle=$request->get('calle');
    	$establecimientos->num_interior=$request->get('num_interior');
    	$establecimientos->num_exterior=$request->get('num_exterior');
    	$establecimientos->colonia=$request->get('colonia');
    	$establecimientos->codigo_postal=$request->get('codigo_postal');
    	$establecimientos->telefono=$request->get('telefono');
        $establecimientos->num_medidor=$request->get('num_medidor');
    	$establecimientos->cuenta=$request->get('cuenta');
    	$establecimientos->correo_electronico=$request->get('correo_electronico');
    	$establecimientos->save();
    	return Redirect::to(establecimientos);

    }
    public function show ($id) 
    {
    	return view ("establecimientos.show,"["establecimientos"=>Establecimientos::findOrFail($id)]);
    }
    public function edit ($id)
    {
    	return view ("establecimientos.edit,"["establecimientos"=>Establecimientos::findOrFail($id)]);
    }
    public function update (EstablecimientosFormRequest $request,$id)
    {
        $establecimientos=Establecimientos::findOrFail($id);
        $establecimientos->nombre_establecimiento=$request->get('nombre_establecimiento');
        $establecimientos->razon_social=$request->get('razon_social');
        $establecimientos->rfc=$request->get('rfc');
        $establecimientos->actividad=$request->get('actividad');
        $establecimientos->calle=$request->get('calle');
        $establecimientos->num_exterior=$request->get('num_exterior');
        $establecimientos->num_interior=$request->get('num_interior');
        $establecimientos->colonia=$request->get('colonia');
        $establecimientos->codigo_postal=$request->get('codigo_postal');
        $establecimientos->telefono=$request->get('telefono');
        $establecimientos->num_medidor=$request->get('num_medidor');
        $establecimientos->cuenta=$request->get('cuenta');
        $establecimientos->correo_electronico=$request->get('correo_electronico');
        $establecimientos->update();
        return Redirect::to(Establecimientos);
    }
    public function destroy ()
    {

    }
}
