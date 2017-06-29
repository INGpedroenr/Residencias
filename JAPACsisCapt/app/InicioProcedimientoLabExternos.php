<?php

namespace JAPACsisCapt;

use Illuminate\Database\Eloquent\Model;

class InicioProcedimientoLabExternos extends Model
{
     protected $table='ipl_externos';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable =
    [
    	'num_oficio_iple',
    	'fecha_elaboracioniple',
    	'fecha_recibido_oficio',
    	'rl_externos_id',
    	'ci_incumplimiento_id',
    	'r_administrativo_id',
    	'establecimientos_id'
    ];

    protected $guarded = [

    ];
}
