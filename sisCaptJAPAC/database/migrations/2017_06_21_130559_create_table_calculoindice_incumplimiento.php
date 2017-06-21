<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCalculoindiceIncumplimiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calculoindice_incumplimiento', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha_muestreo');
            $table->decimal('gastomedio_diario', 11,2);
            $table->decimal('volumen_mes', 11,2)->nullable;
            $table->decimal('valorbasico_incumplido', 11,2)->nullable;
            $table->decimal('cuotapeso_sobrekg', 11,2)->nullable;
            $table->decimal('carga_contaminante', 11,2)->nullable;
            $table->decimal('monto_pagar', 11,2)->nullable;
            $table->decimal('dbo_lmp', 11,2)->nullable;
            $table->decimal('sst_lmp', 11,2)->nullable;
            $table->decimal('gya_lmp', 11,2)->nullable;
            $talbe->integer('establecimiento_id');
            $table->integer('inicio_procedimiento_id');
            $table->integer('ip_lab_externos_id');
            --Referencias
            $table->foreign('establcimiento')->references('establecimiento_id')->on('id');
            $table->foreign('inicio_procedimiento')->references('inicio_procedimiento_id')->on('id');
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
