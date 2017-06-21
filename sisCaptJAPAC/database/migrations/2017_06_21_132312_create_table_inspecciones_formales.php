<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInspeccionesFormales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('inspecciones_formales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('establecimiento_id');
            $table->integer('visita_inspeccion_id');
            $table->integer('inicio_procedimiento_id');
            $table->integer('resolutivo_administrativo_id');
            $table->integer('calculoindice_incumplimineto_id');
            $table->integer('resultados_lab_externos_id');
            $table->integer('ip_lab_externos_id');
            --Referencias
            $table->foreign('establcimiento')->references('establecimiento_id')->on('id');
            $table->foreign('visita_inspeccion')->references('visita_inspeccion_id')->on('id');
            $table->foreign('inicio_procedimiento')->references('inicio_procedimiento_id')->on('id');
            $table->foreign('resolutivo_administrativo')->references('resolutivo_administrativo_id')->on('id');
            $table->foreign('calculoindice_incumplimiento')->references('calculoindice_incumplimiento_id')->on('id');
            $table->foreign('resultados_lab_externos')->references('resultados_lab_externos_id')->on('id');
            $table->foreign('ip_lab_externos')->references('ip_lab_externos_id')->on('id');
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
