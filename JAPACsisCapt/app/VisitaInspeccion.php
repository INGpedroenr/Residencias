<?php

namespace JAPACsisCapt;

use Illuminate\Database\Eloquent\Model;

class VisitaInspeccion extends Model
{
    protected $table='v_inspeccion';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable =
    [
    	'numv_inspeccion',
    	'fechav_inspeccion',
    	'num_oficioVI',
    	'descarga',
    	'trampa_gya',
    	'trampa_sst',
    	'num_permiso',
    	'fechaemision_permiso',
    	'status',
    	'observaciones',
    	'empresa_nueva',
    	'establecimientos_id'
    ];

    protected $guarded = [

    ];
}
