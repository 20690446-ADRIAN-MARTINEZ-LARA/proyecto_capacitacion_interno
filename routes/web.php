<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\SolicitarCursoController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\CursoInscritoController;
use App\Http\Controllers\Auth\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/inicio');
    }
    return view('auth.login');
});

Route::get('/inicio', [InicioController::class,'index'])->middleware('auth')->name('inicio');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profileDocente', [ProfileController::class, 'edit'])->name('profile.editDocente');
    Route::get('/profileJefe', [ProfileController::class, 'edit'])->name('profile.editJefe');
    Route::get('/profileAdmin', [ProfileController::class, 'edit'])->name('profile.editAdmin');
    Route::get('/encuesta', [EncuestaController::class, 'formulario'])->name('encuesta.formulario');
    Route::post('/encuesta', [EncuestaController::class, 'guardarEncuesta'])->name('encuesta.guardar');
    Route::get('/encuesta/gracias', [EncuestaController::class, 'gracias'])->name('encuesta.gracias');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::resource('cursos', CursoController::class);
    Route::resource('solicitarcursos', SolicitarCursoController::class);
    Route::resource('periodos', PeriodoController::class);
    Route::resource('cursosinscritos', CursoInscritoController::class);

});

require __DIR__.'/auth.php';
