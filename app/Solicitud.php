<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'solicitud';
  
    protected $primaryKey = 'id_solicitud';
  
    protected $fillable = [
        'origen','id_estudiante', 'fecha', 'estado', 'oferta_id', 'nombre_ofer', 'id_empleador',
    ];
  
}
