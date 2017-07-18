<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersVInspeccion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_inspeccion', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('numv_inspeccion', 25);
            $table->dateTime('fechav_inspeccion');
            $table->string('num_oficioVI', 30);
            $table->integer('descarga')->nullable;
            $table->boolean('trampa_gya')->nullable;
            $table->boolean('trampa_sst')->nullable;
            $table->string('num_permiso', 25)->nullable;
            $table->dateTime('fechaemision_permiso')->nullable;
            $table->integer('status')->nullable;
            $table->string('obeservaciones', 500)->nullable;
            $table->boolean('empresa_nueva')->nullable;
            $table->integer('establecimientos_id')->unsigned();
            //Referancias
            $table->foreign('establecimientos_id')->references('id')->on('establecimientos');
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
        Schema::dropIfExists('v_inspeccion');
    }
}
