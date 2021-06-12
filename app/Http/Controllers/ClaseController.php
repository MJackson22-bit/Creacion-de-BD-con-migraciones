<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClaseController extends Controller
{
    public function index() {
        $listaClase = DB::table('clase')->get();
        $message = "Clases registradas";
        return view('Clase.list', compact('listaClase', 'message'));
    }
    public function create(){
        return view('Clase.create');
    }
}
