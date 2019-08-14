<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';

    //protected $primaryKey = 'numero_de_empleado_id';

    //public $incrementing = false;

    //protected $keyType = 'string';

    //public $timestamps = false;


    protected $fillable = [
        'nombre', 'apellido_paterno', 'apellido_materno', 'direccion', 'puesto', 'telefono',
    ];
}
