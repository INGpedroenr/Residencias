<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRLExternos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('rl_externos', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fechaentrega_estudios');
            $table->integer('descargas_rle')->nullable;
            $table->string('laboratorio', 30)->nullable;
            $table->decimal('dbo_rle', 11,2);
            $table->decimal('sst_rle', 11,2);
            $table->decimal('gya_rle', 11,2);
            $table->integer('status')->nullable;
            $table->integer('establecimientos_id')->unsigned();
            //Referencias
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
        Schema::dropIfExists('rl_externos');
    }
}
