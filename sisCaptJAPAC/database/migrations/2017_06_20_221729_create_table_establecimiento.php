<?php


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
        Schema::create('establecimiento', function (Blueprint $table) 
		{
            $table->increments('id');
            $table->string('nombre_establecimiento', 100);
            $table->string('razon_social', 100);
			$table->string('rfc', 30);
            $table->string('actividad', 30);
            $table->string('calle', 100);
            $table->integer('num_interior')->nullable;
            $talbe->string('num_exterior', 7)->nullable;
            $table->string('colonia', 100);
            $talbe->integer('codigo_postal');
            $table->string('telefono', 15);
            $table->integer('num_medidor')->nullable;
            $table->integer('cuenta')->nullable;
            $table->string('correo_electronico', 50);
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
        Schema::dropIfExists('establecimiento');
    }
}
