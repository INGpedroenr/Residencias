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
            Schema::create(('ip_lab_externos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num_oficio_iple', 30);
            $table->dateTime('fecha_elaboracioniple')->nullable;
            $table->dateTime('fecha_recivido_ofcio')->nullable;
            $talbe->integer('resultados_lab_externos_id');
            $table->integer('calculoindice_incumplimiento_id');
            $table->integer('resolutivo_administrativo_id');
            $talbe->integer('establecimiento_id');
            --Referencias
            $table->foreign('resultados_lab_externos_id')->references('id')->on('resultados_lab_externos');
            $table->foreign('calculoindice_incumplimiento_id')->references('id')->on('calculoindice_incumplimiento');
            $table->foreign('resolutivo_administrativo_id')->references('id')->on('resolutivo_administrativo');
            $table->foreign('establecimiento_id')->references('id')->on('establecimiento');
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
        Schema::dropIfExists('ip_lab_externos');
    }
}
