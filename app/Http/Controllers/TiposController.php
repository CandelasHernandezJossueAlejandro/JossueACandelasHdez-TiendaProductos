<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipos;

class TiposController extends Controller
{
    public function base(){
        $tipos_a = Tipos::all();
        $tipos_b = \DB::select('SELECT tipos.id_tipos as id_tipos, tipos.nombre as nombre, tipos.detalle as detalle, tipos.activo as activo  
        FROM tb_tipos as tipos');
        return view("listaTipos")
        ->with(['tipos1' => $tipos_a])
        ->with(['tipos2' => $tipos_b]);
    }

    public function tipos(){
        $tipos_a = Tipos::all();
        $tipos_b = \DB::select('SELECT tipos.id_tipos as id_tipos, tipos.nombre as nombre, tipos.detalle as detalle, tipos.activo as activo  
        FROM tb_tipos as tipos');
        return view("listaTipos")
        ->with(['tipos1' => $tipos_a])
        ->with(['tipos2' => $tipos_b]);
    }

    public function detalle($id){
        $tipos = Tipos::find($id);  
        return view("detalleTipos")
        ->with(['tipos' => $tipos]);
    }

    public function alta(){
        $tipos = Tipos::all();
        return view("formATipos")
            ->with(['tipos' => $tipos]);
    }

    public function registrar(Request $request){
        
        //----------- Validar campos (requerido) --------------
        /*
        $this -> validate($request,[
            'nombre' => 'required',
            'detalle' => 'required'
        ]);
        */

//Tipos::create($request->only('nombre', 'detalle', 'activo'));

        Tipos::create(array(
            'nombre' => $request -> input('nombre'),
            'detalle' => $request -> input('detalle'),
            'activo' => '1'
        ));
        
        return redirect()->route('altaTipos');
    }

//-------------------- editar ---------------------

    public function editar(Tipos $id){
        return view("formMTipos")
            ->with(['tipos' => $id]);
    }

    public function salvar(Tipos $id, Request $request){
        //$id -> update($request->only('nombre','detalle', 'activo'));
        $query = Tipos::find($id -> id_tipos);
        $query -> nombre = trim($request -> nombre);
        $query -> detalle = trim($request -> detalle);

        $query -> save();

        return redirect() -> route("editarTipos", ['id' => $id->id_tipos]);
    }

    // --------------------- borrar --------------
    public function borrar(Tipos $id){
        //$id = Tipos::find($id);

        $id->delete();
        return redirect()->route("listaTipos");
    }

}
