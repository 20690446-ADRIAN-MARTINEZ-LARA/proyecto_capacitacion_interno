<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    use HasFactory;

    // Campos que se pueden asignar en masa
    protected $fillable = [
        'correo',
        'departamento',
        'curso_id',
        'evento',
        'instructor',
        'desarrollo',
        'participacion',
        'comentarios',
        // Agrega los campos adicionales aquí
    ];

    // Definir la relación con el modelo Curso
    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
