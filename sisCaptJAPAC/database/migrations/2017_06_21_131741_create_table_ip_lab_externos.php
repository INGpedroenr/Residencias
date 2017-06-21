<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIpLabExternos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('ip_lab_externos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num_oficio_iple');
            $table->dateTime('elaboracion')->nullable;
            $table->dateTime('fecha_recivido_ofcio')->nullable;
            $talbe->integer('resultados_lab_externos_id');
            $table->integer('calculoindice_incumplimiento_id');
            $table->integer('resolutivo_administrativo_id');
            $talbe->integer('establecimiento_id');
            --Referencias
            $table->foreign('resultados_lab_externos')->references('resultados_lab_externos_id')->on('id');
            $table->foreign('calculoindice_incumplimiento')->references('calculoindice_incumplimiento_id')->on('id');
            $table->foreign('resolutivo_administrativo')->references('resolutivo_administrativo_id')->on('id');
            $table->foreign('establcimiento')->references('establecimiento_id')->on('id');
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
