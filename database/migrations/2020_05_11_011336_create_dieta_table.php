<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDietaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dieta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('resultado', 230);
            $table->unsignedInteger('alumno_id');
            $table->foreign('alumno_id', 'fk_dieta_alumno')->references('id')->on('alumno')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('dieta');
    }
}
