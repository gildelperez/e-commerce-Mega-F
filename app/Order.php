<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table = 'orders';
	protected $fillable = ['order_id','subtotal', 'envio', 'user_id'];

	public function user(){
		return $this ->belongsTo('App\User','user_id');
	}
	public function order(){
		return $this ->belongsTo('App\Order','order_id');
	}


	public function order_items(){
		return $this ->hasMany('App\OrderItem');
	}
	

    //
}
