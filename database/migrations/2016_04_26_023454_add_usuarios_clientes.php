<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsuariosClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_cliente', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('usuario_id')->unsigned();
            $table->integer('cliente_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuario_cliente');
    }
}
