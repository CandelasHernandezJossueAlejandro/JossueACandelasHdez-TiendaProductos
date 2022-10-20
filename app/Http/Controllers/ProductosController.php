<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Tiendas;

class ProductosController extends Controller
{

    public function base(){
        $productos_a = Productos::all();
        $productos_b = \DB::select('SELECT productos.id_producto, productos.clave, productos.nombre, productos.cantidad, productos.costo, productos.categoria, tiendas.id_tiendas, productos.foto, productos.activo 
        FROM tb_productos as productos, tb_tiendas as tiendas
        WHERE productos.id_tienda = tiendas.id_tiendas');
        //dd($productos_a->all());
        return view("listaProductos")
            ->with(['productos1' => $productos_a])
            ->with(['productos2' => $productos_b]);
    }


    public function productos(){
        $productos_a = Productos::all();
        $productos_b = \DB::select('SELECT productos.id_producto, productos.clave, productos.nombre, productos.cantidad, productos.costo, productos.categoria, tiendas.id_tiendas, productos.foto, productos.activo 
        FROM tb_productos as productos, tb_tiendas as tiendas
        WHERE productos.id_tienda = tiendas.id_tiendas');
        //dd($productos_a->all());
        return view("listaProductos")
            ->with(['productos1' => $productos_a])
            ->with(['productos2' => $productos_b]);
    }

    public function detalle($id){
        $productos = Productos::find($id);
        return view("detalleProductos")
            ->with(['productos' => $productos]);
    }

//------------- Alta -------------
    public function alta(){
        $tiendas = Tiendas::all();
        return view("formAProductos")
            ->with(['tiendas' => $tiendas]);
    }

    public function registrar(Request $request){

        /*
        //--------------- Validar -------------
        $this->validate($request,[
            'clave' => 'required',
            'nombre' => 'required',
            'cantidad' => 'required',
            'costo' => 'required',
            'categoria' => 'required',
        ]);

        */

        //

        Productos::create(array(
            'clave' => $request -> input('clave'),
            'nombre' => $request -> input('nombre'),
            'cantidad' => $request -> input('cantidad'),
            'costo' => $request -> input('costo'),
            'categoria' => $request -> input('categoria'),
            'id_tienda' => $request -> input('id_tienda'),
            'foto' => $request -> input('foto'),
            'activo' => '1'
        ));

        return redirect() -> route('altaProductos');
    }

// ----------------- editar --------------
    public function editar(Productos $id){
        $tiendas = Tiendas::all();
        return view("formMProductos")
            ->with(['producto' => $id])
            ->with(['tiendas'=> $tiendas]);
    }

    public function salvar(Productos $id, Request $request){
        //$id->update($request->only('clave', 'nombre', 'cantidad', 'costo', 'categoria', 'id_tienda', 'foto', 'activo'));
        $query = Productos::find($id -> id_producto);
        $query -> clave = $request -> clave;
        $query -> nombre = trim($request->nombre);
        $query -> cantidad = trim($request -> cantidad);
        $query -> costo = trim($request -> costo);
        $query -> categoria = trim($request -> categoria);
        $query -> id_tienda = $request -> id_tienda;
        $query -> foto = trim($request -> foto);
        $query -> activo = $request -> activo;

        $query -> save();
        return redirect() -> route("editarProductos", ['id' => $id->id_producto]);
    }

//-------------------- Borrar --------------------------
    public function borrar(Productos $id){
        //$id = Tiendas::find($id);

        \Storage::disk('local')->delete($id->foto);

        $id->delete();
        return redirect()->route("listaProductos");
    }


}
