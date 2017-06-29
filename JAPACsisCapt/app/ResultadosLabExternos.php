<?php

namespace JAPACsisCapt;

use Illuminate\Database\Eloquent\Model;

class ResultadosLabExternos extends Model
{
     protected $table='rl_externos';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable =
    [
    	'fechaentrega_estudios',
    	'descargas_rle',
    	'laboratorio',
    	'dbo_rle',
    	'sst_rle'
    	'gya_rle'
    	'status',
    	'establecimientos_id'
    ];

    protected $guarded = [

    ];
}
