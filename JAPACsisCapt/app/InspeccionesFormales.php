<?php

namespace JAPACsisCapt;

use Illuminate\Database\Eloquent\Model;

class InspeccionesFormales extends Model
{
     protected $table='i_formales';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable =
    [
    	'establecimientos_id',
    	'v_inspecciones_id',
    	'i_procedimiento_id',
    	'r_administrativo_id',
    	'ci_incumplimiento_id'
    	'rl_externos_id',
    	'ipl_externos_id',
    	
    	
    ];
}
