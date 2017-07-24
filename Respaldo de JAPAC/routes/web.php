<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

//Perfil
Route::get('/perfil', 'PerfilController@getperfil');

//Establecimientos
Route::get('/establecimientos', 'EstablecimientosController@getestablecimientos');

//Inspecciones Formales
Route::get('/inspeccionesformales/visitainspeccion', 'VisitaInspeccionController@getvisitainspeccion');

Route::get('/inspeccionesformales/inicioprocedimiento', 'InicioProcedimientoController@getinicioprocedimiento');

Route::get('/inspeccionesformales/indiceincumplimiento', 'IndiceIncumplimientoController@getindiceincumplimiento');

Route::get('/inspeccionesformales/resolutivoadministrativo', 'ResolutivoAdministrativoController@getresolutivoadministrativo');

//Laboratorio Externos
Route::get('/laboratoriosexternos/resultadoslabexternos', 'ResultadosLabExternosController@getresultadoslabexternos');

Route::get('/laboratoriosexternos/inicioprocedimientolabexternos','InicioProcedimientoLabExternosController@getinicioprocedimientolabexternos');

Route::get('/laboratoriosexternos/indiceincumplimientolabexternos', 'IndiceIncumplimientoLabExternosController@getindiceincumplimientolabexternos');

Route::get('/laboratoriosexternos/resolutivoadministrativolabexternos', 'ResolutivoAdministrativoLabExternosController@getresolutivoadministrativolabexternos');

//Inspecciones Informales
Route::get('/inspeccionesinformales', 'InspeccionesInformalesController@getinspeccionesinformales');