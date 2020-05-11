<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpedienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expediente', function (Blueprint $table) {
            $table->increments('id');
            
            
            $table->string('Peso', 20);
          
            $table->string('Estatura', 20);
            $table->string('Musculo', 20);
            $table->string('Grasavic', 20); //Grasa viceral
            $table->string('Grasacorp', 20); //Grasa corporal
            $table->string('RM', 20);
            $table->string('VMI', 20);
            $table->string('cintura', 20);
            $table->unsignedInteger('alumno_id');
            $table->foreign('alumno_id', 'fk_expediente_alumno')->references('id')->on('alumno')->onDelete('restrict')->onUpdate('restrict');
            
            
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
        Schema::dropIfExists('expediente');
    }
}
