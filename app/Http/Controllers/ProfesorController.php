<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index() {
        $listaProfesor = DB::table('profesors')->get();
        $message = "Profesores registrados";
        return view('Profesor.list', compact('listaProfesor', 'message'));
    }
    public function create(){
        return view('Profesor.create');
    }
    public function store(Request $request){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        $id = $request->input('p_id');
        $nombre = $request->input('p_nombre');
        $apellido = $request->input('p_apellido');
        $titulo = $request->input('p_titulo');
        $affected = DB::table('profesors')->insert(['id' => $id, 'nombre' => $nombre, 'apellido' => $apellido, 'titulo' => $titulo]);
        if($affected > 0){
            $message = "El dato ha sido registrado con éxito";
        }else{
            $message = "Ha ocurrido un error";
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        $listaAula = DB::table('profesors')->get();
        return view('Profesor.notification', compact('message'));
    }
}
