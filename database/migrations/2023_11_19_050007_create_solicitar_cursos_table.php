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
        Schema::create('solicitar_cursos', function (Blueprint $table) {
            $table->id();
            $table->Integer('user_id');
            $table->String('departamento');
            $table->String('nombre');
            $table->Text('objetivo');
            $table->String('instructor');
            $table->Integer('participantes');
            $table->String('prioridad');
            $table->String('origen');
            $table->Text('requerimientos');
            $table->String('estado')->default('pendiente');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitar_cursos');
    }
};
