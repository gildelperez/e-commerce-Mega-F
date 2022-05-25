<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdersMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
            {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->decimal('subtotal',5,2);
            $table->decimal('envio',10,2);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('orders');
    }
}
