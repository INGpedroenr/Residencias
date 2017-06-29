<?php

namespace JAPACsisCapt;

use Illuminate\Database\Eloquent\Model;

class InicioProcedimiento extends Model
{
    protected $table='i_procedimiento';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable =
    [
    	'laboratorio',
    	'dbo',
    	'sst',
    	'gya',
    	'num_oficioIP',
    	'fecha_elaboracion',
    	'fecha_recibidoIP',
    	'establecimientos_id',
    	'v_inspeccion_id'
    ];

    protected $guarded = [

    ];
}
