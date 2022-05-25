<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostProductosController;
use App\Http\Requests\PostUpdateRequests;
use App\Producto;
Use App\Categoria;

use Illuminate\Support\Facades\Storage;

class ProductosController extends Controller
{

    public function __construct(){
        $this->middleware('admin', ['except'=>'index']);

    } 

    public function index(Request $request)
    {
        $productos = Producto::Buscador1($request->codigo)->paginate(10);
        
        //return $categorias;
        return view('admin.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.productos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostProductosController $request)
    {
      
            $producto = Producto::create($request->all());
            //IMAGEN
       
             if($request->file('imagen')) {
               $path = Storage::disk('public')->put('archivos', $request->file('imagen'));
               $producto->fill(['imagen' => asset($path)])->save();
               
        }

            // $obj = Producto::create ([
            //'nombre' =>$request->get('nombre'),
            //'codigo' =>$request->get('codigo'),
            //'descripcion' =>$request->get('descripcion'),
            //'imagen' => $request->get('imagen'),
            //'precio' =>$request->get('precio'),
            //'idestado' =>$request->get('idestado'),
            //'idcategoria' =>$request->get('idcategoria'),
        

        $mensaje = $producto ? 'Agregado correctamente!' : 'Ha Ocurrido un Error :( !';
        return redirect()->route('productos.index')->with('mensaje', $mensaje);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos = Producto::find($id);
        return view('admin.productos.editar',compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[ 
        'nombre'=>'required', 
        'codigo'=>'required', 
        'descripcion'=>'required', 
        //'imagen'=>'required', 
        'precio'=>'required']);
        // $producto = Producto::find($id);

        //$producto->update($request->all());
        
        $obj = producto::find($id)->update($request->all());
        
        //if($request->file('imagen')) {
         //   $path = Storage::disk('public')->put('archivos', $request->file('imagen'));
         //   $obj = $producto->fill(['imagen' => asset($path)])->save();
            
     
        $mensaje = $obj ? 'Actualizado correctamente!' : 'Hubo un Error :( !';
        return redirect()->route('productos.index')->with('mensaje', $mensaje);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   



       public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();

        $mensaje = $producto ? 'Eliminado correctamente!' : 'HA Ocurrido un Error :( !';
        return redirect()->route('productos.index')->with('mensaje', $mensaje);
    }
}
