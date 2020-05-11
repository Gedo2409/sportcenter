<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->increments('id');
           
            $table->string('Nombre', 50);
            $table->string('Peso', 20);
            $table->integer('Edad');
            $table->string('Estatura', 20);
            $table->string('Musculo', 20);
            $table->string('Grasavic', 20); //Grasa viceral
            $table->string('Grasacorp', 20); //Grasa corporal
            $table->string('RM', 20);
            $table->string('VMI', 20);
            $table->string('cintura', 20);
            $table->string('Telefono', 20);
            
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno');
    }
}
