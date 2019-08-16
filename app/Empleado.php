<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';

    protected $fillable = [
        'nombre', 'apellido_paterno', 'apellido_materno', 'direccion', 'puesto', 'telefono', 'correo'
    ];

    public function incidencias()
    {
    	return $this->hasMany('App\Incidencia');
    }
}
