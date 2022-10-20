<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\TiendasController;
use App\Http\Controllers\TiposController;
use App\Models\Tiendas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::name('welcome') -> get('/welcome', function () { return view('welcome'); });
//Route::name('base')->get('base', function (){return view('base'); });


// ======================================== Usuarios =======================================
//--------------------- Usuario:Listas ---------------------
Route::name('listaUsuarios') -> get('usuarios',[UsuariosController::class, 'usuarios']);

//--------------------- Usuarios:Alta ----------------------
Route::name('formAUsuarios') -> get('formAUsuarios', [UsuariosController::class, 'alta']);
Route::name('registrarUsuarios') -> post('registrarUsuarios', [UsuariosController::class, 'registrar']);

// ------------------------ Usuarios:Detalle -------------------------------
Route::name('detalleUsuario') -> get('detalleUsuario/{id}', [UsuariosController::class, 'detalle']);

// ------------------------ Usuarios:Editar -------------------------------
Route::name('editarUsuarios') -> get('editar/{id}', [UsuariosController::class, 'editar']);
Route::name('salvarUsuarios') -> put('salvar/{id}', [UsuariosController::class, 'salvar']);

// ------------------------ Usuarios:Borrar -------------------------------
//Route::name('borrarUsuarios')->delete('borrar/{id}', [UsuariosController::class, 'borrar']);
Route::name('borrarUsuarios') -> get('borrarUsuarios/{id}',[UsuariosController::class, 'borrar']);



// ===================================== Tiendas =================================
// ------------------ Lista:Tiendas ------------------
Route::name('listaTiendas') -> get('listatiendas',[TiendasController::class, 'tiendas']);

// ------------------ Alta:Tiendas ------------------
Route::name('formATiendas') -> get('formATiendas', [TiendasController::class, 'alta']);
Route::name('registrarTiendas') -> post('registrarTiendas', [TiendasController::class, 'registrar']);

// ---------------------- Tiendas:Detalle --------------------------
Route::name('detalleTiendas') -> get('detalleTiendas/{id}', [TiendasController::class, 'detalle']);

// ---------------------- Tiendas:Editar ----------------------------
Route::name('formETiendas') -> get('formETiendas/{id}', [TiendasController::class, 'editar']);
Route::name('salvarTiendas') -> put('salvarTiendas/{id}', [TiendasController::class, 'salvar']);

// ---------------------- Tiendas:Borrar ----------------------------
Route::name('borrarTiendas') -> get('borrarTiendas/{id}', [TiendasController::class, 'borrar']);


// ===================================== Productos =================================
// ------------------ Lista:Productos ------------------
Route::name('listaProductos') -> get('productos',[ProductosController::class, 'productos']);

// ------------------ Alta:Productos ------------------
Route::name('altaProductos') -> get('altaProductos', [ProductosController::class, 'alta']);
Route::name('registrarProductos') -> post('registrarProductos', [ProductosController::class, 'registrar']);

// ------------------ Detalle:Productos ------------------
Route::name('detalleProductos') -> get('detalleProductos/{id}',[ProductosController::class, 'detalle']);

// ------------------ Editar:Productos ------------------
Route::name('editarProductos') -> get('editarProductos/{id}', [ProductosController::class, 'editar']);
Route::name('salvarProductos') -> put('salvarProductos/{id}', [ProductosController::class, 'salvar']);

// ------------------ Borrar:Productos ------------------
Route::name('borrarProductos') ->get('borrarProductos/{id}', [ProductosController::class, 'borrar']);


// ===================================== Tipos =================================
// ------------------ Lista:Tipos ------------------
Route::name('listaTipos') -> get('tipos',[TiposController::class, 'tipos']);

// ------------------ Alta:Tipos ------------------
Route::name('altaTipos') -> get('altaTipos', [TiposController::class, 'alta']);
Route::name('registrarTipos') -> post('registrarTipos', [TiposController::class, 'registrar']);

// ------------------ Detalle:Tipos ------------------
Route::name('detalleTipos') -> get('detalleTipos/{id}', [TiposController::class, 'detalle']);

// ------------------ Editar:Tipos ------------------
Route::name('editarTipos') -> get('editarTipos/{id}', [TiposController::class, 'editar']);
Route::name('salvarTipos') -> put('salvarTipos/{id}', [TiposController::class, 'salvar']);

// ------------------ Borrar:Tipos ------------------
Route::name('borrarTipos') -> get('borrarTipos/{id}',[TiposController::class, 'borrar']);
