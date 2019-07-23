<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('email');
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('universidad')->nullable();
            $table->string('materia')->nullable();
            $table->string('espacio_trabajo')->nullable();
            $table->string('email_confirm_code')->nullable();
            $table->string('email_change_code')->nullable();
            $table->string('nuevo_email')->nullable();
            $table->string('password_code')->nullable();
            $table->string('avatar')->nullable();
            $table->text('biografia')->nullable();
            $table->string('rol')->nullable();
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
        Schema::dropIfExists('usuarios');
    }
}
