<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdersItemsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');
            $table->decimal('precio',5,2);
            $table->integer('order_id');
            $table->integer('idproducto')->unsigned();
            $table->foreign('idproducto')->references('idproducto')->on('productos')->onDelete('cascade');
             $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('order_id')->on('orders')->onDelete('cascade');

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
        Schema::dropIfExists('orders_items');
    }
}
