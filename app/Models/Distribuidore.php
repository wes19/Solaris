<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Distribuidore extends Model
{
     protected $fillable = [
        'nombre', 'correo', 'telefono', 'empresa', 'depto', 'ciudad', 'mensaje', 'g-recaptcha-response'
    ];
}
