<?php


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
			$table->string('numresolutivo_administrativo', 30)->nullable;
            $table->string('num_oficioRA', 30)->nullable;
            $talbe->integer('establecimiento_id');
            $table->intiger('visita_inspeccion_id');
            $table->integer('inicio_procedimiento_id');
            $table->integer('calculoindice_incumplimiento_id');
            $table->integer('ip_lab_externos_id');
            //Referencias
            $table->foreign('establecimiento_id')->references('id')->on('establecimiento');
            $table->foreign('visita_inspeccion_id')->references('id')->on('visita_inspeccion');
            $table->foreign('inicio_procedimiento_id')->references('id')->on('inicio_procedimiento');
            $table->foreign('calculoindice_incumplimiento_id')->references('id')->on('calculoindice_incumplimiento');
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
        Schema::dropIfExists('resolutivo_administrativo');
    }
}
