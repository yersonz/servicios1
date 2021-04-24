<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->String("Nombre_Pedido","100");
            $table->date("Fecha_Pedido");
        });
        Schema::table('pedidos', function (Blueprint $table) {
        $table->unsignedBigInteger("id_proveedor");
        $table->unsignedBigInteger("id_usuario");
        $table->foreign("id_proveedor")->references("id")->on("proveedors")->cascadeOnDelete();
        $table->foreign("id_usuario")->references("id")->on("usuarios")->cascadeOnDelete();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
