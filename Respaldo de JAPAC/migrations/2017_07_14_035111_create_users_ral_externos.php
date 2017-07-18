<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersRalExternos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 public function up()
    {
        Schema::create('ral_externos', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha_programacion')->nullable;
            $table->dateTime('fecha_resolutivo')->nullable;
            $table->decimal('num_meses_cobrar', 11,2)->nullable;
            $table->string('numresolutivo_administrativo', 30)->nullable;
            $table->string('num_oficioRA', 30)->nullable;
            $table->integer('ciil_externos_id')->unsigned();
            //Referencias
            $table->foreign('ciil_externos_id')->references('id')->on('ciil_externos');
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
        Schema::dropIfExists('ral_externos');
    }
}
