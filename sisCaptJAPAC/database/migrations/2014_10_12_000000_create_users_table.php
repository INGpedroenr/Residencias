<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) 
		{
            $table->increments('id');
            $table->string('usuario', 50);
            $table->string('password', 50);
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('departamento', 50);
            $table->string('puesto', 50);
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
        Schema::dropIfExists('users');
    }
}
