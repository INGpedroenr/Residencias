<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCiIncumplimiento extends Migration
{
    public function up()
    {
        Schema::create('ci_incumplimiento', function (Blueprint $table) {
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
            $table->integer('i_procedimiento_id')->unsigned();
            $table->integer('ipl_externos_id')->unsigned();
            //Referencias
            $table->foreign('i_procedimiento_id')->references('id')->on('i_procedimiento');
            $table->foreign('ipl_externos_id')->references('id')->on('ipl_externos');
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
        Schema::dropIfExists('i_incumplimiento');
    }
}
