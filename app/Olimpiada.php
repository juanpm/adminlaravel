<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Olimpiada extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'descripcion', 'fecha_inicio', 'fecha_fin_inscripcion', 'fecha_fin'];
}
