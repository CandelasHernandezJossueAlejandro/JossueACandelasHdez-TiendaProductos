<?php

namespace App\Http\Controllers;

use App\Http\Requests\validar;
use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Models\Tipos;

class UsuariosController extends Controller
{

    public function base(){
        $usuarios_a = Usuarios::all();
        $usuarios_b = \DB::select('SELECT tb_usuarios.id_usuario as id_usuario,  tb_usuarios.nombre as nombre, tb_usuarios.app as apellidoP, tb_usuarios.ap as apellidoM,
        tb_usuarios.fn as fechaNac, tb_usuarios.gen as gen, tb_usuarios.foto as foto, tb_usuarios.email as email, tb_usuarios.pass as pass, tb_usuarios.activo as activo, 
        tb_tipos.nombre as nivel
        FROM tb_usuarios as tb_usuarios, tb_tipos as tb_tipos
        WHERE tb_usuarios.id_tipox = tb_tipos.id_tipos');
        return view("listaUsuarios")
            ->with(['usuarios1' => $usuarios_a])
            ->with(['usuarios2' => $usuarios_b]);
    }

    public function usuarios(){
        $usuarios_a = Usuarios::all();//Enloquet de laravel
        $usuarios_b = \DB::select('SELECT usuario.id_usuario as id_usuario, usuario.nombre as nombre, usuario.app as apellidoP, usuario.ap as apellidoM,
        usuario.fn as fechaNac, usuario.gen as gen, usuario.foto as foto, usuario.email as email, usuario.pass as pass, usuario.activo as activo, 
        tipos.nombre as nivel 
        FROM tb_usuarios as usuario, tb_tipos as tipos 
        WHERE usuario.id_tipo = tipos.id_tipos');//Se va directamente a Base de datos
        //dd($usuarios_a->all());
        return view("listaUsuarios")
            ->with(['usuarios1' => $usuarios_a])
            ->with(['usuarios2' => $usuarios_b]);
    }

    public function detalle($id){
        $usuario = Usuarios::find($id);
        return view("detalleUsuario")
            ->with(['usuario' => $usuario]);
    }

    //--------------- Alta -----------------

    public function alta(){
        $tipos = Tipos::all();
        return view("formAUsuarios")
            -> with(['tipos' => $tipos]);
    }

    public function registrar(validar $request){

        //$validado = $request -> validated();
        //--------- Validar Campos (requerido) ----------
        /*
        $this->validate($request,[
            'clave' => 'required',
            'nombre' => 'required',
            'app' => 'required',
            'ap' => 'required',
            'fn' => 'required',
            'email' => 'required',
            'pass' => 'required'
        ]);
        */

        //Usuarios::create($request->only('clave', 'nombre', 'app', 'ap', 'fn', 'gen', 'foto', 'email', 'pass', 'nivel', 'activo'));

        Usuarios::create(array(
            'clave' => $request -> input('clave'),
            'nombre' => $request -> input('nombre'),
            'app' => $request -> input('app'),
            'ap' => $request -> input('ap'),
            'fn' => $request -> input('fn'),
            'gen' => $request -> input('gen'),
            'foto' => 'default.jpg',
            //'foto' => $request -> input('foto'),
            'email' => $request -> input('email'),
            'pass' => $request -> input('pass'),
            'id_tipo' => $request -> input('id_tipo'),
            'activo' => '1'
        ));

        //return redirect()->route('formAUsuarios');
        return redirect()->route("listaUsuarios");
    }

    // --------------- editar ----------------
    public function editar(Usuarios $id){
        $tipos = Tipos::all();
        return view("formMUsuarios")
            ->with(['usuarios' => $id])
            ->with(['tipos' => $tipos]);
    }

    public function salvar(Usuarios $id, Request $request){
        //$id->update($request->only('clave', 'nombre', 'app', 'ap', 'fn', 'gen', 'foto', 'email', 'pass', 'id_tipo', 'activo'));
        
        $query = Usuarios::find($id -> id_usuario);
        $query -> clave = $request -> clave;
        $query -> nombre = trim($request->nombre);
        $query -> app = trim($request->app);
        $query -> ap = trim($request -> ap);
        $query -> fn = $request->fn;
        $query -> gen = $request -> gen;
        $query -> foto = trim($request -> foto);
        $query -> email = trim($request -> email);
        $query -> pass = trim($request -> pass);
        $query -> id_tipo = $request -> id_tipo;
        $query -> activo = $request -> activo;

        $query -> save();

        //return redirect()-> route("editarUsuarios", ['id' => $id->id_usuario]);
        return redirect()->route("listaUsuarios");
    }

    // ------------------ Borrar -----------------
    //public function borrar($id){}
    public function borrar(Usuarios $id){
        //$id = Usuarios::find($id);
        \Storage::disk('local')->delete($id->foto); //destrulle la foto del usuario

        $id->delete();
        return redirect()->route("listaUsuarios");
    }


}
