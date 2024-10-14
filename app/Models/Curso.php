<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\CursoInscrito;
use App\Models\User;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'instructor', 'departamento', 'periodo', 'duracion', 'horario',
        'folio', 'modalidad', 'sede', 'limiteAlumnos', 'estado'
    ];


    public function inscritos()
    {
        return $this->hasMany(CursoInscrito::class, 'curso_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
