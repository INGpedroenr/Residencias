<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIProcedimiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_procedimiento', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('laboratorio', 30);
            $table->decimal('dbo', 11,2);
            $table->decimal('sst', 11,2);
            $table->decimal('gya', 11,2);
            $table->string('num_oficioIP', 30);
            $table->dateTime('fecha_elaboracion')->nullable;
            $table->dateTime('fecha_recibidoIP')->nullable;
            $table->integer('establecimientos_id')->unsigned();
            $table->integer('v_inspeccion_id')->unsigned();
            //Referencias
            //$table->foreign('establecimientos_id')->references('id')->on('establecimientos');
            //$table->foreign('v_inspeccion_id')->references('id')->on('v_inspeccion');
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
        Schema::dropIfExists('i_procedimiento');
    }
}
