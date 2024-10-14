<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class SolicitarCurso extends Model
{
    use HasFactory;

    protected $fillable=['user_id', 'departamento','nombre', 'objetivo', 'instructor', 'participantes', 'prioridad', 'origen', 'requerimientos'];

}
