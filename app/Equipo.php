<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';

    protected $fillable = [
        'equipo', 'jugados', 'ganados', 'perdidos', 'empates', 'puntos'
    ];
}
