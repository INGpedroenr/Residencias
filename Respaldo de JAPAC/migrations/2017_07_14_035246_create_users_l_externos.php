<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersLExternos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('l_externos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('establecimientos_id')->unsigned();
            $table->integer('rl_externos_id')->unsigned();
            $table->integer('ipl_externos_id')->unsigned();
			$table->integer('ral_externos_id')->unsigned();
			$table->integer('ciil_extenros_id')->unsigned();
            //Referencias
            $table->foreign('establecimientos_id')->references('id')->on('establecimientos');
            $table->foreign('rl_externos_id')->references('id')->on('rl_externos');
            $table->foreign('ipl_externos_id')->references('id')->on('ipl_externos');
            $table->foreign('ral_externos_id')->references('id')->on('ral_externos');
            $table->foreign('ciil_extenros_id')->references('id')->on('ciil_extenros');
            
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