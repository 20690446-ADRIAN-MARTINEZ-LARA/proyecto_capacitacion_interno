<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->String('nombre');
            $table->String('instructor');
            $table->String('departamento');
            $table->String('periodo');
            $table->String('duracion');
            $table->String('horario');
            $table->String('folio');
            $table->String('modalidad');
            $table->String('sede');
            $table->String('estado')->default('Disponible');
            $table->integer('limiteAlumnos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
