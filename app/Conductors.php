<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductors extends Model
{
    protected $fillable = ['numero_cedula','primer_nombre','segundo_nombre','apellidos','direccion','telefono','ciudad'];
    protected $dates = ['created_at','updated_at'];

}
