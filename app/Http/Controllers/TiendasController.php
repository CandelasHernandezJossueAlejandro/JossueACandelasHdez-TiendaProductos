<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiendas;

class TiendasController extends Controller
{
    public function base(){
        $tiendas_a = Tiendas::all();
        $tiendas_b = \DB::select('SELECT tiendas.id_tiendas, tiendas.clave, tiendas.nombre, tiendas.foto
        FROM tb_tiendas as tiendas');
        return view("listaTiendas")
            ->with(['tiendas1' => $tiendas_a])
            ->with(['tiendas2' => $tiendas_b]);
    }

    public function tiendas(){
        $tiendas_a = Tiendas::all();
        $tiendas_b = \DB::select('SELECT tiendas.id_tiendas, tiendas.clave, tiendas.nombre, tiendas.foto
        FROM tb_tiendas as tiendas');
        return view("listaTiendas")
            ->with(['tiendas1' => $tiendas_a])
            ->with(['tiendas2' => $tiendas_b]);
    }

    public function detalle($id){
        $tiendas = Tiendas::find($id);
        return view("detalleTiendas")
            ->with(['tiendas' => $tiendas]);
    }

    //--------------- Alta --------------

    public function alta(){
        return view("formATiendas");
    }

    public function registrar(Request $request){

        //------------Validar Campos (requerido) -------
        /*
        $this->validate($request,[
            'clave' => 'required',
            'nombre' => 'required'
        ]);
        */

        //Tiendas::create($request->only('clave', 'nombre', 'foto'));

        Tiendas::create(array(
            'clave' => $request -> input('clave'),
            'nombre' => $request -> input('nombre'),
            'foto' => $request -> input('foto')
        ));

        //return redirect()->route('formATiendas');
        return redirect()->route("listaTiendas");
    }

    //------------- editar -----------
    public function editar(Tiendas $id){
        return view("formETiendas")
            ->with(['tiendas' => $id]);
    }

    public function salvar(Tiendas $id, Request $request){
        //$id->update($request->only('clave', 'nombre', 'foto'));
        
        $query = Tiendas::find($id -> id_tiendas);
        $query -> clave = $request -> clave;
        $query -> nombre = trim($request->nombre);
        $query -> foto = trim($request -> foto);

        $query -> save();
        //return redirect()-> route("formETiendas",['id' => $id->id_tiendas]);
        return redirect()->route("listaTiendas");
    }
//---------------- Borrar -------------------
    public function borrar(Tiendas $id){
        //$id = Tiendas::find($id);
        
        \Storage::disk('local')->delete($id->foto);

        $id->delete();
        return redirect()->route("listaTiendas");
    }

}
