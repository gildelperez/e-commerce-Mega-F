
<?php 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',['as'=>'inicio',
'uses'=>'ProductosController@index']);

Route::get('producto/{idproducto}',[
'as'=>'producto-detalles',
'uses'=>'ProductosController@show']);

Route::get('Acercade', function(){ return view('tiendaonline/secciones/acercade');});
'Route'::get('contacto', function(){ return view('tiendaonline/secciones/contacto');});

Route::get('mispedidos',[
	'as' =>'mispedidos',
	'uses'=>'Admin\PedidosController@pedido']);

//carrito de compra
Route::get('carritoShow',[
'as'=>'carrito',
'uses'=>'CarritoController@show']);

//usando inyeccion de dependencias con la palabra clave producto y categoria
Route::bind('productos',function($id){
return App\producto::where('id',$id)->first();
});

Route::bind('categorias',function($id){
return App\categoria::where('id',$id)->first();
});


Route::get('carrito/agregar/{producto}',['as'=>'carrito-agregar','uses'=>'CarritoController@add'
]);

Route::get('carrito/borrar/{producto}',['as'=>'carrito-borrar','uses'=>'CarritoController@delete'
]);

Route::get('carrito/actualizar/{producto}/{cantidad?}',['as'=>'carrito-actualizar','uses'=>'CarritoController@update'
]);

Route::get('carrito/vaciar',['as'=>'carrito-vaciar','uses'=>'CarritoController@vaciar'
]);

Route::post('/comment', 'CommentsControllers@newComment');

//orden detalles
Route::get('orden-detalles',[
	'as'=>'orden-detalles',
	'uses'=>'CarritoController@ordenDetalles'
])->middleware('auth');



/*Route::get('payment', array(
	'as'=>'payment',
	'uses'=>'PaypalController@postPayment',
));

Route::get('payment/status', array(
	'as'=>'payment.status',
	'uses'=>'PaypalController@getPaymentStatus',
));*/


//solo el usuario que esta autenticado puede acceder a esta ruta
/*Route::get('orden-detalles',['as'=>'orden-detalles','uses'=>'CarritoController@OrdenDetalles' 
])->middleware('auth');

Route::get('payment', array(
	'as'=>'payment',
	'uses'=>'PaypalController@postPayment',
));

Route::get('payment/status', array(
	'as'=>'payment.status',
	'uses'=>'PaypalController@getPaymentStatus',
));*/
//BACK admin
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('payment', array(
	'as'=>'payment',
	'uses'=>'PaypalController@postPayment',
));


Route::get('payment/status', array(
	'as'=>'payment.status',
	'uses'=>'PaypalController@getPaymentStatus',
));

Route::resource('categorias', 'Admin\CategoriasController')->middleware('admin');
Route::resource('productos', 'Admin\ProductosController')->middleware('admin');
Route::resource('usuarios', 'Admin\UsuariosController')->middleware('admin');
Route::resource('pedidos', 'Admin\PedidosController')->middleware('admin');

Route::resource('seguimiento','Admin\BitacorasController')->middleware('admin');
//view user bitacora
Route::resource('miseguimiento','BitacorasController')->middleware('auth');


//Creando una ruta para una vista de home back

Route::resource('back', 'Admin\HomeController')->middleware('admin',['except'=>'index']);


//$this->middleware('admin', ['except'=>'index']);

Route::get('/respuesta',function(){
	return view('response');
});



//Activacion
Route::get('activacion/{code}','UserControllerV@activate');

Route::post('complete/{id}','UserControllerV@complete');
Route::resource('completarinfo','UserControllerV');
