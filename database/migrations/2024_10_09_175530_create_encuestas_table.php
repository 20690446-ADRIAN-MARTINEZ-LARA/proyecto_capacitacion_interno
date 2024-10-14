<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            $table->id();
            $table->string('correo'); // Correo del participante
            $table->string('departamento'); // Correo del participante
            $table->unsignedBigInteger('curso_id'); // ID del curso tomado
            $table->string('evento'); // Opinión o comentarios
            $table->string('instructor'); // Pregunta sobre expectativas del evento
            $table->string('desarrollo'); // Pregunta sobre el objetivo del programa
            $table->string('participacion'); // Pregunta sobre si el instructor aclaró dudas
            $table->text('comentarios'); // Pregunta sobre el desarrollo profesional
            // Agrega más campos según las preguntas de la encuesta...

            $table->timestamps();

            // Definir la relación con la tabla cursos
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encuestas');
    }
}
