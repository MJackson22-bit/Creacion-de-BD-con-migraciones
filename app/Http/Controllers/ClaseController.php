<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClaseController extends Controller
{
    public function index() {
        $listaClase = DB::table('clases')->get();
        $message = "Clases registradas";
        return view('Clase.list', compact('listaClase', 'message'));
    }
    public function create(){
        return view('Clase.create');
    }
    public function store(Request $request){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        $codigo = $request->input('c_codigo');
        $nombre = $request->input('c_nombre');
        $credito = $request->input('c_creditos');
        $affected = DB::table('clases')->insert(['codclase' => $codigo, 'nombre' => $nombre, 'credito' => $credito]);
        if($affected > 0){
            $message = "El dato ha sido registrado con éxito";
        }else{
            $message = "Ha ocurrido un error";
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        $listaAula = DB::table('clases')->get();
        return view('Clase.notification', compact('message'));
    }
    public function show($id){
        $clase = DB::table('clases')->where('codclase', $id)->get()[0];
        return view('Clase.edit', compact('clase'));
    }
    public function update(Request $request, $id){
        $nombre = $request->input('c_nombre');
        $credito = $request->input('c_creditos');
        $affected = DB::table('clases')->where('codclase', $id)->update(['nombre' => $nombre, 'credito' => $credito]);
        if($affected > 0){
            $message = "Los datos han sido actualizados con éxito";
        }elseif($affected == 0){
            $message = "No han ocurrido cambios";
        }
        else{
            $message = "Ha ocurrido un error al actulizar los datos";
        }
        return view('Clase.notification', compact('message'));
    }
    public function destroy($id){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        $affected = DB::table('clases')->where('codclase', $id)->delete();
        if($affected > 0){
            $message = "El registro ha sido eliminado con éxito";
        }else{
            $message = "Ha ocurrido un error";
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        $listaClase = DB::table('clases')->get();
        return view('Clase.list', compact('listaClase','message'));
    }
}
