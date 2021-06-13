<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Aula;

class AulaController extends Controller
{
    public function index() {
        $listaAula = DB::table('aulas')->get();
        $message = "Aulas registradas";
        return view('Aula.list', compact('listaAula', 'message'));
    }
    public function create(){
        return view('Aula.create');
    }
    public function store(Request $request){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        $id = $request->input('a_id');
        $nombre = $request->input('a_nombre');
        $ubicacion = $request->input('a_ubicacion');
        $affected = DB::table('aulas')->insert(['id' => $id, 'nombre' => $nombre, 'ubicacion' => $ubicacion]);
        if($affected > 0){
            $message = "El dato ha sido registrado con éxito";
        }else{
            $message = "Ha ocurrido un error";
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        $listaAula = DB::table('aulas')->get();
        return view('Aula.notification', compact('message'));
    }
    public function show($id){
        $aula = DB::table('aulas')->where('id', $id)->get()[0];
        return view('Aula.edit', compact('aula'));
    }
    public function update(Request $request, $id){
        $nombre = $request->input('a_nombre');
        $ubicacion = $request->input('a_ubicacion');
        $affected = DB::table('aulas')->where('id', $id)->update(['nombre' => $nombre, 'ubicacion' => $ubicacion]);
        if($affected > 0){
            $message = "Los datos han sido actualizados con éxito";
        }else{
            $message = "Ha ocurrido un error al actulizar los datos";
        }
        $type = "aula";
        return view('Aula.notification', compact('type', 'message'));
    }
}
