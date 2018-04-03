<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    protected $fillable = ['placa','color','marca','tipo_vehiculo','conductor_id','propietario_id'];
    protected $dates = ['created_at','updated_at'];
    /**
     * obtener el conductor
     */
    public function conductor()
    {
        return $this->belongsTo('App\Conductors');
    }
    /**
     * obtener el propietario
     */
    public function propietario()
    {
        return $this->belongsTo('App\Propietarios');
    }
}
