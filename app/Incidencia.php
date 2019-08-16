<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    protected $fillable = [
        'incidencia', 'comentario', 'empleado_id'
    ];

    public function empleado()
    {
    	return $this->belongsTo('App\Empleado');
    }
}
