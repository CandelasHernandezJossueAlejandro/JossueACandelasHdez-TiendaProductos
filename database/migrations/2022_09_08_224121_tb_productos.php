<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_productos', function (Blueprint $table){
            $table -> bigIncrements('id_producto');
            $table -> string('clave', 30);
            $table -> string('nombre', 50);
            $table -> integer('cantidad');
            $table -> float('costo', 100 , 2);
            $table -> integer('id_tipo');
            $table -> integer('id_tienda');
            $table -> text('foto');
            $table -> boolean('activo')->nullable();
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_productos');
    }
}
