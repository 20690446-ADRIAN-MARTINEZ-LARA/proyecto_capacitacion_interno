<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use App\Models\Curso;
use Illuminate\Http\Request;

class PeriodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periodos = Periodo::get();
        return view('vistas.admin.periodos.index', compact('periodos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vistas.admin.periodos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'periodo' => 'required',
        ]);
        $periodos = new Periodo();
        $periodos->periodo = $request->periodo;
        $periodos->save();
        return redirect(route('periodos.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Periodo $periodo)
    {
        $cursos = Curso::get();
        return view('vistas.admin.periodos.cursos.index',compact('periodo','cursos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periodo $periodo)
    {
        return view('vistas.admin.periodos.edit', compact('periodo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periodo $periodo)
    {
        $periodo->periodo = $request->periodo;
        $periodo->save();
        return redirect(route('periodos.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periodo $periodo)
    {
        $periodo->delete();
        return redirect(route('periodos.index'));
    }
}
