<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avance extends Model
{
    protected $fillable = ['id', 'Peso','Estatura', 'Musculo', 'Grasavic', 'Grasacorp', 'RM', 'VMI', 'cintura', 'alumno_id'];
    protected $hidden = ['created_at', 'updated_at',];

    public function alumno()
    {
        return $this->belongsTo('App\Alumno', 'alumno_id', 'id' );
    }
}
