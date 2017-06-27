<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInicioProcedimiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incio_procedimiento', function (Blueprint $table) 
		{
            $table->increments('id');
            $table->string('laboratorio', 30);
            $table->decimal('dbo', 11,2);
            $table->decimal('sst', 11,2);
            $table->decimal('gya', 11,2);
            $table->string('num_oficioIP', 30);
            $talbe->dateTime('fecha_elaboracion')->nullable;
            $table->dateTime('fecha_recibidoIP')->nullable;
            $talbe->integer('establecimiento_id');
            $table->intiger('visita_inspeccion_id');
            //Referencias
            $table->foreign('establecimiento_id')->references('id')->on('establecimiento');
            $table->foreign('visita_inspeccion_id')->references('id')->on('visita_inspeccion');
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
        Schema::dropIfExists('incio_procedimiento');
    }
}
