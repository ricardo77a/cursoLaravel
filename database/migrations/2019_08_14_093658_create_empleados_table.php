<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('direccion');
            $table->string('puesto');
            $table->string('correo');
            $table->string('telefono');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
