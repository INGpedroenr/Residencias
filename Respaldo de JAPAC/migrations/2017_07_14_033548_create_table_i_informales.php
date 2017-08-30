<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIInformales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_informales', function (Blueprint $table)
        {
            $table->increments('id');
            $table->dateTime('fecha_inspeccion_informal');
            $table->integer('num_infraccion');
            $table->string('nombre_establecimiento', 100);
            $table->string('calle', 100);
            $table->integer('num_exterior')->nullable;
            $table->string('num_interior', 7)->nullable;
            $table->string('colonia', 100);
            $table->integer('codigo_postal');
            $table->string('actividad', 30);
            $table->integer('cuenta');
            $table->integer('num_medidor');
            $table->string('señas_particulares', 100);
            $table->string('hora', 25);
            $table->string('nombre_inspector', 100)->nullable;
            $table->integer('num_inspector')->nullable;
            $table->string('motivo_infraccion', 100);
            $table->string('observaciones', 500);
            $table->string('elaboro', 50);
            $table->rememberToken();
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
        Schema::dropIfExists('i_informales');
    }
}
