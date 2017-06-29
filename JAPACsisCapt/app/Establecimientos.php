<?php

namespace JAPACsisCapt;

use Illuminate\Database\Eloquent\Model;

class Establecimientos extends Model
{
    protected $table='establecimientos';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable =
    [
    	'nombre_establecimiento',
    	'razon_social',
    	'rfc',
    	'actividad',
    	'calle',
    	'num_interior',
    	'num_exterior',
    	'colonia',
    	'codigo_postal',
    	'telefono',
    	'num_medidor',
    	'cuenta',
    	'correo_electronico'
    ];

    protected $guarded = [

    ];
}
