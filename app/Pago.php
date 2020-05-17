<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $fillable = ['monto', 'alumno_id'];
    protected $hidden = ['created_at', 'updated_at',];
}
