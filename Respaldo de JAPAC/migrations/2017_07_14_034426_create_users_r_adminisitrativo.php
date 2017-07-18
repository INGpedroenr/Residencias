<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersRAdminisitrativo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_administrativo', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha_programacion')->nullable;
            $table->dateTime('fecha_resolutivo')->nullable;
            $table->decimal('num_meses_cobrar', 11,2)->nullable;
            $table->string('numresolutivo_administrativo', 30)->nullable;
            $table->string('num_oficioRA', 30)->nullable;
            $table->integer('ci_incumplimiento_id')->unsigned();
            //Referencias
            $table->foreign('ci_incumplimiento_id')->references('id')->on('ci_incumplimiento');
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
        Schema::dropIfExists('r_administrativo');
    }
}
