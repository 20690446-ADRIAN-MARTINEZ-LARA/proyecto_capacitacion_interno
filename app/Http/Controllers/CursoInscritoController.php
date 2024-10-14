<?php

namespace App\Http\Controllers;

use App\Models\CursoInscrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CursoInscritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->input('action') === 'inscrito') {
            $cursosInscritos = $request->user()->cursosInscritos;
            return view('vistas.docente.cursos.inscritos.index', compact('cursosInscritos'));
        }
        if ($request->input('action') === 'cursado') {
            $cursosInscritos = $request->user()->cursosInscritos;
            return view('vistas.docente.cursos.terminados.index', compact('cursosInscritos'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cursoinscrito = new CursoInscrito();
        $cursoinscrito->user_id = auth()->user()->id;
        $cursoinscrito->curso_id = $request->curso_id;

        $cursoinscrito->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(CursoInscrito $cursoInscrito)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CursoInscrito $cursoInscrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CursoInscrito $cursoInscrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cursoInscrito = CursoInscrito::findOrFail($id);
        $cursoInscrito->delete();

        return back();
    }
}
