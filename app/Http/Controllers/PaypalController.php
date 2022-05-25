<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Input;

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;


use App\Order;
use App\OrderItem;

class PaypalController extends BaseController
{
   
	private $_api_context;

	public function __construct(){

		$paypal_conf = \Config::get('paypal');
		$this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
		$this->_api_context->setConfig($paypal_conf['settings']);


	}



    public function postPayment(){
    	$payer = new Payer();
    	$payer->setPaymentMethod('paypal');

    	$items = array();
    	$subtotal = 0;
    	$carrito = \Session::get('carrito');
    	$currency = 'MXN';

    	foreach ($carrito as $producto) {
    		$item = new Item();
    		$item->setName($producto->nombre)
    		->setCurrency($currency)
    		->setDescription($producto->descripcion)
    		->setQuantity($producto->cantidad)
    		->setPrice($producto->precio);

    		$items[] = $item;
    		$subtotal += $producto->cantidad * $producto->precio;
    	}

    	$item_list = new ItemList();
    	$item_list->setItems($items);

    	$details = new Details();
    	$details->setSubtotal($subtotal)->setShipping(5);

    	$total = $subtotal + 5;

    	$amount = new Amount();
    	$amount->setCurrency($currency)
    	->setTotal($total)
    	->setDetails($details);

    	$transaction = new Transaction();
    	$transaction->setAmount($amount)
    	->setItemList($item_list)
    	->setDescription('Pedido en mi Tienda Online');

    	$redirect_urls = new RedirectUrls();
    	$redirect_urls->setReturnUrl(\URL::route('payment.status'))
    	->setCancelUrl(\URL::route('payment.status'));

    	$payment = new Payment();
    	$payment->setIntent('Sale')
    	->setPayer($payer)
    	->setRedirectUrls($redirect_urls)
    	->setTransactions(array($transaction));

    	try{
    		$payment->create($this->_api_context);
    	}catch(\PayPal\Exception\PPConnectionException $ex){
    		if(\Config::get('app.debug')){

    			echo "Exception:" . $ex->getMessage(). PHP_EOL;
    			$err_data = json_decode($ex->getData(), true);
    			exit;
       		}
	    	else{
	    		die('Ups! Algo salio mal');
	    	}
        }

        foreach ($payment->getLinks() as $link) {
        	if($link->getRel() == 'approval_url'){
        		$redirect_url = $link->getHref();
        		break;
        	}
        }


        \Session::put('paypal_payment_id', $payment->getId());

        if(isset($redirect_url)){
        	return \Redirect::away($redirect_url);
        }
        return \Redirect::route('carrito')
        	    ->with('mensaje', 'Ups! Error desconocido');

    }



    public function getPaymentStatus(){
    	$payment_id = \Session::get('paypal_payment_id');
		//Limpiar la sesion payment ID
    	\Session::forget('paypal_payment_id');
    	$payerId = Input::get('PayerID');
    	$token = Input::get('token');

    	if(empty($payerId) || empty($token)){
    		return \Redirect::route('inicio')
    		->with('mensaje', 'Hubo un problema al intentar pagar con Paypal');
    	}

    	$payment = Payment::get($payment_id, $this->_api_context);
    	$execution = new PaymentExecution();
    	$execution->setPayerId(Input::get('PayerID'));
    	$result = $payment->execute($execution, $this->_api_context);

    	if($result->getState() == 'approved'){
    		$this->saveOrder();
    		\Session::forget('carrito');
    		return \Redirect::route('inicio')
    		->with('mensaje', 'Compra realizada de forma correcta');
    	}
    	return \Redirect::route('inicio')
    		->with('mensaje', 'La compra fue cancelada :(');
    }

    protected function saveOrder(){
    	$subtotal = 0;
    	$carrito = \Session::get('carrito');

    	$envio = 5;

    	foreach ($carrito as $producto) {
    		$subtotal += $producto->cantidad * $producto->precio;
    	}

    	$order = Order::create([
    		'subtotal' => $subtotal,
    		'envio' => $envio,
    		'user_id' => \Auth::user()->id
    	]);


    	foreach ($carrito as $producto) {
    		$this->saveOrderItem($producto, $order->id);
    	}
    }

    protected function saveOrderItem($producto, $order_id){
				OrderItem::create([
		    		'precio' => $producto->precio,
		    		'cantidad' => $producto->cantidad,
		    		'idproducto' => $producto->id,
		    		'order_id' => $order_id
		    	]);

    }


}

