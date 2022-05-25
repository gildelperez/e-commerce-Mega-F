<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{

	protected $table = 'orders_items';
	protected $fillable = ['precio', 'cantidad', 'idproducto','order_id'];

	public $timestamps = false;

	public function order(){
		return $this ->belongsTo('App\Order');
	}

	public function PRODUCT(){
		return $this ->belongsTo('App\Producto');
	}


    //
}
