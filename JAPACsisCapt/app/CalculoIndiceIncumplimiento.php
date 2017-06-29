<?php

namespace JAPACsisCapt;

use Illuminate\Database\Eloquent\Model;

class CalculoIndiceIncumplimiento extends Model
{
     protected $table='ci_incumplimiento';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable =
    [
    	'fecha_muestreo',
    	'gastomedio_diario',
    	'volumen_mes',
    	'valorbasico_incumplido',
    	'cuotapeso_sobrekg',
    	'carga_contaminante',
    	'monto_pagar',
    	'dbo_lmp'.
    	'sst_lmp',
    	'gya_lmp',
    	'establecimientos_id',
    	'i_procedimiento_id'
    	'ipl_administrativo_id'
    	
    ];
}
