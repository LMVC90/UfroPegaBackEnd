<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
  
    protected $primaryKey = 'id_usuario';
  
    protected $fillable = [
        'correo', 'contrasena', 'nombre', 'rol', 'region', 'comuna', 'info_extra', 
    ];
}
