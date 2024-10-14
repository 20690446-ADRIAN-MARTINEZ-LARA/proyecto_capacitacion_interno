<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class InicioController extends Controller
{
    public function index(){
        if(Auth::id()){

            $role=Auth()->user()->role;

            if($role=='admin'){
                return view('layouts.admin.dashboard');
            }
            elseif ($role=='docente') {
                return view('layouts.docente.dashboard');
            }
            elseif ($role=='jefedepartamento') {
                return view('layouts.jefedepartamento.dashboard');
            }
        }
    }
}
