<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncuestaController extends Controller
{
    // Muestra el formulario de la encuesta
    public function formulario()
    {
        // Aquí puedes cargar cualquier dato necesario para el formulario si es necesario
        return view('encuesta.formulario');
    }

    // Maneja el envío del formulario de la encuesta
    public function guardarEncuesta(Request $request)
{
    // Validación de los datos
    $request->validate([
        'correo' => 'required|email',
        'departamento' => 'required|string',
        'curso' => 'required|exists:cursos,id', // Asegúrate de validar que el curso existe
        'evento' => 'required|string',
        'instructor' => 'required|string',
        'desarrollo' => 'required|string',
        'participacion' => 'required|string',
        'comentarios' => 'required|string|max:1000',
        // Agrega las demás validaciones aquí...
    ]);

    // Guardar los datos en la tabla encuestas
    EncuestaController::create([
        'correo' => $request->correo,
        'departamento' => $request->departamento,
        'curso_id' => $request->curso,
        'evento' => $request->evento,
        'instructor' => $request->instructor,
        'desarrollo' => $request->desarrollo,
        'participacion' => $request->participacion,
        'comentarios' => $request->comentarios,
        // Agrega los demás campos aquí...
    ]);

    // Redirigir con mensaje de éxito
    return redirect()->route('encuesta.gracias')->with('success', 'Gracias por completar la encuesta.');
}


    // Muestra una página de agradecimiento después de enviar la encuesta
    public function gracias()
    {
        return view('encuesta.gracias');
    }
}
