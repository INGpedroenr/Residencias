<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEstablecimiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimiento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_establecimiento', 100)->nullable;
            $table->string('password', 50);
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('departamento', 50);
            $table->string('puesto', 50);
            $table->string('correo_electronico', 50)->unique();
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
