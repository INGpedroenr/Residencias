<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRAdministrativo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_administrativo', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha_programacion')->nullable;
            $table->dateTime('fecha_resolutivo')->nullable;
            $table->decimal('num_meses_cobrar', 11,2)->nullable;
            $table->string('numresolutivo_administrativo', 30)->nullable;
            $table->string('num_oficioRA', 30)->nullable;
            $table->integer('establecimientos_id')->unsigned();
            $table->integer('v_inspeccion_id')->unsigned();
            $table->integer('i_procedimiento_id')->unsigned();
            $table->integer('ci_incumplimiento_id')->unsigned();
            $table->integer('ipl_externos_id')->unsigned();
            //Referencias
            //$table->foreign('establecimientos_id')->references('id')->on('establecimientos');
            //$table->foreign('v_inspeccion_id')->references('id')->on('v_inspeccion');
            //$table->foreign('i_procedimiento_id')->references('id')->on('i_procedimiento');
            //$table->foreign('ci_incumplimiento_id')->references('id')->on('ci_incumplimiento');
            //$table->foreign('ipl_externos_id')->references('id')->on('ipl_externos');
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
        Schema::dropIfExists('r_administrativo');
    }
}
