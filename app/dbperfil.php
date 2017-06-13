<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dbperfil extends Model{
   public $fillable = [
        'nombre', 'carnet', 'correo', 'carrera', 'sede',
    ];
}
