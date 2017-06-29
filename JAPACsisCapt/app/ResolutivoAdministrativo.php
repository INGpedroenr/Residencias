<?php

namespace JAPACsisCapt;

use Illuminate\Database\Eloquent\Model;

class ResolutivoAdministrativo extends Model
{
    protected $table='r_administrativo';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable =
    [
    	'fecha_programacion',
    	'fecha_resolutivo',
    	'num_meses_cobrar',
    	'num_resolutivo_administrativo',
    	'num_oficioRA',
    	'establecimientos_id',
    	'v_inspeccion_id',
    	'i_procedimiento_id',
    	'ci_incumplimiento_id',
    	'ipl_externos'
    ];

    protected $guarded = [

    ];
}
