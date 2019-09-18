<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('preguntas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pregunta')->nullable();
            $table->string('img')->nullable();
            $table->string('iframe_video_yt')->nullable();
            $table->string('link_video_yt')->nullable();

            $table->json('empieza_video_yt')->nullable();
            $table->string('termina_video_yt')->nullable();
            $table->string('credito_media')->nullable();

            $table->string('segundos')->nullable();

            $table->string('tipo_pregunta')->nullable();

            $table->string('respuesta_1')->nullable();
            $table->string('respuesta_2')->nullable();
            $table->string('respuesta_3')->nullable();
            $table->string('respuesta_4')->nullable();

            $table->string('correcta_1')->nullable();
            $table->string('correcta_2')->nullable();
            $table->string('correcta_3')->nullable();
            $table->string('correcta_4')->nullable();
            
            $table->string('respuesta_vf')->nullable();


            $table->string('tipo')->nullable();

            $table->string('id_quiz');

            $table->string('id_usuario');

            $table->string('orden')->nullable();

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
        //
    }
}
