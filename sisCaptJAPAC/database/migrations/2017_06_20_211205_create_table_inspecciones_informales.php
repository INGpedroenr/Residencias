<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInspeccionesInformales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspecciones_informales', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha_inspeccion_informal');
            $table->integer('num_infraccion');
            $table->string('nombre_establecimiento', 100);
            $table->string('calle', 100);
            $table->integer('num_exterior');
            $table->string('num_interior', 7);
            $table->string('colonia', 100);
            $table->integer('codigo_postal');
            $table->string('actividad', 30);
            $table->integer('cuenta');
            $table->integer('num_medidor');
            $table->string('señas_particulares', 100);
            $table->string('hora', 25);
            $table->string('nombre_inspector', 100);
            $table->integer('num_inspector');
            $table->string('motivo_insfraccion', 100);
            $table->string('observaciones', 500);
            $table->string('elaboro', 50)
            $table->rememberToken();
            $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
