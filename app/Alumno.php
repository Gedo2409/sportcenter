<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //
    protected $fillable = ['Nombre', 'Peso', 'Edad', 'Estatura', 'Musculo', 'Grasavic', 'Grasacorp', 'RM', 'VMI', 'cintura', 'Telefono'];
    protected $hidden = ['created_at', 'updated_at',];

    

}
