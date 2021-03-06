<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('img')->nullable()->default("Edu.png");
            $table->string('img_creditos')->nullable();
            $table->string('video_lobby')->nullable();
            $table->string('lenguaje')->nullable();
            $table->string('borrador')->nullable()->default("1");
            $table->string('id_usuario');
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
        Schema::dropIfExists('quiz');
    }
}
