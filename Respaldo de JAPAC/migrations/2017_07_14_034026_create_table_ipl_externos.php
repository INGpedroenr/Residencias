<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIplExternos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
            Schema::create('ipl_externos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num_oficio_iple', 30);
            $table->dateTime('fecha_elaboracioniple')->nullable;
            $table->dateTime('fecha_recibido_ofcio')->nullable;
            $table->integer('rl_externos_id')->unsigned();
            //Referencias
            $table->foreign('rl_externos_id')->references('id')->on('rl_externos');
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
        Schema::dropIfExists('ipl_externos');
    }
}
