<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClaseController extends Controller
{
    public function index() {
        $listaClase = DB::table('clase')->get();
        $message = "";
        return view('Clase.list', compact('listaClase', 'message'));
    }
}
