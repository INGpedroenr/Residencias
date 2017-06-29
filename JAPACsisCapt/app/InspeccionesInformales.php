<?php

namespace JAPACsisCapt;

use Illuminate\Database\Eloquent\Model;

class InspeccionesInformales extends Model
{
    protected $table='i_informales';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable =
    [
    	'fecha_inspeccion_informal',
    	'num_infraccion',
    	'nombre_establecimiento',
    	'calle',
    	'num_interior'
    	'num_exterior'
    	'colonia',
    	'codigo_postal',
    	'actividad',
    	'cuenta',
    	'num_medidor',
    	'señas_particulares',
    	'hora',
    	'nombre_inspector',
    	'num_inspector',
    	'motivo_infraccion',
    	'observaciones',
    	'elaboro'
    ];

    protected $guarded = [

    ];
}
