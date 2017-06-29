<?php

namespace JAPACsisCapt;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    protected $table='users';
    protected $primaryKey='id';
    public $timestamps=false;

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =
    [
        'usuario',
        'password',
        'nombre',
        'apellido',
        'departamento',
        'puesto',
        'corre_electronico',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
