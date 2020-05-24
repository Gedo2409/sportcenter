<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
  
    protected $fillable = ['id','alumno_id', 'monto'];
    protected $hidden = ['created_at', 'updated_at',];


    public function alumno()
    {
        return $this->belongsTo('App\Alumno', 'alumno_id', 'id' );
    }
}
