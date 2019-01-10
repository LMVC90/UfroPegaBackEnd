<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $table = 'oferta';
  
    protected $primaryKey = 'id_oferta';
  
    protected $fillable = [
        'nombre_cat', 'monto', 'comentario', 'cupos', 'ubicacion', 'empleador', 'categoria_id',
    ];

    
}
