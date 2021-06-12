<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfesorController extends Controller
{
    public function index() {
        $listaProfesor = DB::table('profesor')->get();
        $message = "";
        return view('Profesor.list', compact('listaProfesor', 'message'));
    }
}
