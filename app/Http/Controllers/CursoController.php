<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Periodo;
use Illuminate\Support\Facades\Auth;

use App\Models\CursoInscrito;
use App\Models\SolicitarCurso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (Auth::id()) {
            $role = Auth()->user()->role;

            if ($role == 'admin') {
                $cursos = Curso::get();
                return view('vistas.admin.cursos.index', compact('cursos'));
            } elseif ($role == 'jefedepartamento') {
                $cursos = Curso::get();
                return view('vistas.jefe.cursos.index', compact('cursos'));
            } elseif ($role == 'docente') {
                $cursos = Curso::whereDoesntHave('inscritos', function ($query) use ($request) {
                    $query->where('user_id', $request->user()->id);
                })->get();
                return view('vistas.docente.cursos.index', compact('cursos'));
            } 
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return redirect(route('cursos.index'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de formularios
        $request->validate([
            'nombre' => 'required',
            'instructor' => 'required',
            'departamento' => 'required',
            'periodo' => 'required',
            'duracion' => 'required',
            'horario' => 'required',
            'folio' => 'required',
            'modalidad' => 'required',
            'sede' => 'required',
            'limiteAlumnos' => 'required|integer|min:1',
        ]);

        // Crear un nuevo curso y asignar los valores
        $curso = new Curso();
        $curso->nombre = $request->nombre;
        $curso->instructor = $request->instructor;
        $curso->departamento = $request->departamento;
        $curso->periodo = $request->periodo;
        $curso->duracion = $request->duracion;
        $curso->horario = $request->horario;
        $curso->folio = $request->folio;
        $curso->modalidad = $request->modalidad;
        $curso->sede = $request->sede;
        $curso->limiteAlumnos = $request->limiteAlumnos;

        // Guardar el curso en la base de datos
        $curso->save();

        // Redireccionar a la vista de cursos
        return redirect(route('cursos.index'))->with('success', 'Curso registrado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Curso $curso)
    {
        if (Auth::id()) {
            $role = Auth()->user()->role;

            if ($role == 'admin') {
                $DocentesInscritos = CursoInscrito::where('curso_id', $curso->id)->with('user')->get();
                return view('vistas.admin.cursos.show', compact('curso', 'DocentesInscritos'));
            } elseif ($role == 'docente') {
                return view('vistas.docente.cursos.show', compact('curso'));
            } elseif ($role == 'jefedepartamento') {
                $DocentesInscritos = CursoInscrito::where('curso_id', $curso->id)->with('user')->get();
                return view('vistas.jefe.cursos.show', compact('curso', 'DocentesInscritos'));
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $curso)
    {
        $periodos = Periodo::orderBy('created_at')->get();
        return view('vistas.admin.cursos.edit', compact('curso', 'periodos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curso $curso)
    {
        if ($request->input('action') === 'editar') {
            $curso->nombre = $request->nombre;
            $curso->instructor = $request->instructor;
            $curso->departamento = $request->departamento;
            $curso->periodo = $request->periodo;
            $curso->duracion = $request->duracion;
            $curso->horario = $request->horario;
            $curso->folio = $request->folio;
            $curso->modalidad = $request->modalidad;
            $curso->sede = $request->sede;
            $curso->limiteAlumnos = $request->limiteAlumnos;
            $curso->save();
            return redirect(route('cursos.index'));
        }
        if ($request->input('action') === 'terminar') {
            $curso->estado = 'Terminado';
            $curso->save();
            return back();
        }
        if ($request->input('action') === 'iniciar') {
            $curso->estado = 'Disponible';
            $curso->save();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect(route('cursos.index'));
    }
}
