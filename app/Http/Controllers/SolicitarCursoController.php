<?php

namespace App\Http\Controllers;

use App\Models\SolicitarCurso;
use App\Models\Periodo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SolicitarCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (Auth::id()) {


            $role = Auth()->user()->role;

            if ($role == 'admin') {
                $solicitarCursos = SolicitarCurso::get();
                return view('vistas.admin.solicitud.index', compact('solicitarCursos'));
            } elseif ($role == 'jefedepartamento') {
                $solicitarCursos = SolicitarCurso::where('user_id', auth()->user()->id)->get();
                return view('vistas.jefe.solicitud.index', compact('solicitarCursos'));
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vistas.jefe.solicitud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'objetivo' => 'required',
            'instructor' => 'required',
            'participantes' => 'required|integer|min:1',
            'prioridad' => 'required',
            'origen' => 'required',
            'requerimientos' => 'required',
        ]);
        $solicitud = new SolicitarCurso();
        $solicitud->user_id = auth()->user()->id;
        $solicitud->departamento = auth()->user()->departamento;
        $solicitud->nombre = $request->nombre;
        $solicitud->objetivo = $request->objetivo;
        $solicitud->instructor = $request->instructor;
        $solicitud->participantes = $request->participantes;
        $solicitud->prioridad = $request->prioridad;
        $solicitud->origen = $request->origen;
        $solicitud->requerimientos = $request->requerimientos;


        $solicitud->save();
        return redirect(route('solicitarcursos.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, SolicitarCurso $solicitarcurso)
    {
        $role = Auth()->user()->role;
        if ($role == 'admin') {
            $periodos = Periodo::orderBy('created_at')->get();
            if ($request->input('action') === 'enseñar') {
                return view('vistas.admin.solicitud.show', compact('solicitarcurso'));
            }
            if ($request->input('action') === 'registrar') {
                return view('vistas.admin.cursos.create', compact('solicitarcurso', 'periodos'));
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SolicitarCurso $solicitarcurso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SolicitarCurso $solicitarcurso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SolicitarCurso $solicitarcurso)
    {
        $solicitarcurso->delete();
        return redirect(route('solicitarcursos.index'));
    }
}
