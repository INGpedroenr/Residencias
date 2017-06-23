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
            Schema::create(('inspecciones_formales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('establecimiento_id');
            $table->integer('visita_inspeccion_id');
            $table->integer('inicio_procedimiento_id');
            $table->integer('resolutivo_administrativo_id');
            $table->integer('calculoindice_incumplimineto_id');
            $table->integer('resultados_lab_externos_id');
            $table->integer('ip_lab_externos_id');
            --Referencias
            $table->foreign('establecimiento_id')->references('id')->on('establecimiento');
            $table->foreign('visita_inspeccion_id')->references('id')->on('visita_inspeccion');
            $table->foreign('inicio_procedimiento_id')->references('id')->on('inicio_procedimiento');
            $table->foreign('resolutivo_administrativo_id')->references('id')->on('resolutivo_administrativo');
            $table->foreign('calculoindice_incumplimiento_id')->references('id')->on('calculoindice_incumplimiento_id');
            $table->foreign('resultados_lab_externos_id')->references('id')->on('resultados_lab_externos');
            $table->foreign('ip_lab_externos_id')->references('id')->on('ip_lab_externos');
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
        Schema::dropIfExists('inspecciones_formales');
    }
}
