<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Solicitude extends Model
{
     protected $fillable = [
        'nombre', 'correo', 'telefono', 'exp', 'ciudad', 'file', 'g-recaptcha-response'
    ];
}
