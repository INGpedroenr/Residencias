<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableResultadosLabExternos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('resultados_lab_externos', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fechaentrega_estudios');
            $table->integer('descargas_rle')->nullable;
            $table->string('laboratorio')->nullable;
            $table->decimal('dbo_rle', 11,2);
            $table->decimal('sst_rle', 11,2);
            $table->decimal('gya_rle', 11,2);
            $table->integer('status')->nullable;
            $talbe->integer('establecimiento_id');
            --Referencias
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
