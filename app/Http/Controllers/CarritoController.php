<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
class CarritoController extends Controller
{
    //
    public function __construct(){

    if (!\Session::has('carrito')) \Session::put('carrito',array()); 
    	# code...
    }

    public function show(){
    	//return \Session::get('carrito');
    	$carrito = \Session::get('carrito');
        $total = $this ->total();

    	return view('tiendaonline.secciones.carrito', compact('carrito', 'total'));
    	//return redirect()->route('carrito');
    }
    //para poder trabajar  se nesecitara uso de idproducto, para consultar nuestro base  de datos, el objetivo es traer la infornmacion como un objeto y despues agregarlo a la sesion de carrito.
    //al consultar la informacion de un  producto esta operacion se estara utilizando en varias funciones es decir en eliminar, producto agregar, eliminar.
    //para ello el laravel ay algo que se conoce como la inyeccion de dependencias y estas se trabajan sobre la rutas es decir es como si tuvieramos una ruta oculta o enlazada a una palabra
    
    public function add(Producto $producto){

    	$carrito = \Session::get('carrito');
    	$producto->cantidad =1;
    	$carrito[$producto->id]=$producto;
    	\Session::put('carrito',$carrito);
        $carrito = \Session::get('carrito');
    	return redirect()->route ('carrito');
    }
    public function delete(Producto $producto){
    $carrito = \Session::get('carrito');
    unset($carrito[$producto->id]);
    \Session::put('carrito',$carrito);
    return redirect()->route ('carrito');
    }

    public function update(Producto $producto, $cantidad){

        $carrito = \Session::get('carrito');
        $carrito[$producto->id]->cantidad = $cantidad;
        \Session::put('carrito',$carrito);
        return redirect()->route ('carrito');
    }

    public function vaciar(Producto $producto){
        \Session::forget('carrito');
        return redirect()->route('carrito');
    }

    public function  total()
    {
        $carrito = \Session::get('carrito');
        $total =0;
        foreach($carrito as $producto){
            $total += $producto->precio * $producto->cantidad;

        }
        return $total;
    }

    //detalles de la orden

   public function ordenDetalles(){
        //Validamos si hay algo en el carrito
      if(count(\Session::get('carrito')) <= 0) 
         return redirect()->route('inicio');
        $carrito = \Session::get('carrito');
        $total = $this->total();
        return view('tiendaonline.orden-detalles', compact('carrito', 'total'));
    }

}
