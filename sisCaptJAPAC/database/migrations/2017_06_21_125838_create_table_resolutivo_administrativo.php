<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableResolutivoAdministrativo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resolutivo_administrativo', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha_programacion')->nullable;
            $table->dateTime('fecha_resolutivo')->nullable;
            $table->decimal('num_meses_cobrar', 11,2)->nullable;
            $table->string('num_oficioRA', 30)->nullable;
            $talbe->integer('establecimiento_id');
            $table->intiger('visita_inspeccion_id');
            $table->integer('inicio_procedimiento_id');
            $table->integer('calculoindice_incumplimiento_id');
            $table->integer('ip_lab_externos_id');
            --Referencias
            $table->foreign('establcimiento')->references('establecimiento_id')->on('id');
            $table->foreign('visita_inspeccion')->references('visita_inspeccion_id')->on('id');
            $table->foreign('inicio_procedimiento')->references('inicio_procedimiento_id')->on('id');
            $table->foreign('calculoindice_incumplimiento')->references('calculoindice_incumplimiento_id')->on('id');
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
