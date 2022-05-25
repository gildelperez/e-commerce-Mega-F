<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBitacorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacoras', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_pedido')->unsigned();
            $table->foreign('id_pedido')->references('order_id')->on('orders')->onDelete('cascade');

            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

            $table->string('ubicacion');
            $table->string('date')->nullable();
            $table->string('descripcion');
            $table->string('soporte');
           

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
        Schema::dropIfExists('bitacoras');
    }
}
