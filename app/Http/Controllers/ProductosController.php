<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Producto;
use App\User;
use App\Comment;
class ProductosController extends Controller
{
	public function index(Request $request)
	{
		$productos=Producto::Buscador($request->nombre)->paginate(10);
		//return $productos;
		return view('tiendaonline.secciones.index', compact('productos'));
	}




	public function show($id)
	{
		$productos = Producto::where('id', $id)->first();
		$comments = $productos->comments()->get();

		return view('tiendaonline.detalles', compact('productos','comments'));
	}


	//public function searh(Request $request)
 //   {
    ///	$name  = $request->get('name');
    	//$email = $request->get('email');
    	

    	//$users = User::orderBy('id', 'DESC')
    	//	->name($name)
    	//	->email($email)
    		
    	//	->paginate(4);

    	//return view('tiendaonline.index', compact('users'));
   // }   
}
