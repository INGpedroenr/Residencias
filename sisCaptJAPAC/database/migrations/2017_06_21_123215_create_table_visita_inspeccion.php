<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVisitaInspeccion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visita_inspeccion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numvisita_inspeccion', 25);
            $table->dateTime('fechavisita_inspeccion');
            $table->string('num_oficioVI', 30);
            $table->integer('descarga')->nullable;
            $table->boolean('trampa_gya')->nullable;
            $table->boolean('trampa_sst')->nullable};
            $table->string('num_permiso', 25)->nullable;
            $table->dateTime('fehcaemision_permiso')->nullable;
            $table->integer('status')->nullable;
            $table->string('obeservaciones', 500)->nullable;
            $table->boolean('empresa_nueva')->nullable;
            $talbe->integer('establecimiento_id');
            --Referencias
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
        Schema::dropIfExists('visita_inspeccion');
    }
}
