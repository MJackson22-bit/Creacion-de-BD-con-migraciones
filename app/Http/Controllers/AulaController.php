<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AulaController extends Controller
{
    public function index() {
        $listaAula = DB::table('aula')->get();
        $message = "Aulas registradas";
        return view('Aula.list', compact('listaAula', 'message'));
    }
    public function create(){
        return view('Aula.create');
    }
}
