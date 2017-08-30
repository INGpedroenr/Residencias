<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIFormales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('i_formales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('establecimientos_id')->unsigned();
            $table->integer('v_inspeccion_id')->unsigned();
            $table->integer('i_procedimiento_id')->unsigned();
            $table->integer('r_administrativo_id')->unsigned();
            //Referencias
            $table->foreign('establecimientos_id')->references('id')->on('establecimientos');
            $table->foreign('v_inspeccion_id')->references('id')->on('v_inspeccion');
            $table->foreign('i_procedimiento_id')->references('id')->on('i_procedimiento');
            $table->foreign('r_administrativo_id')->references('id')->on('r_administrativo');

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
        Schema::dropIfExists('i_formales');
    }
}
