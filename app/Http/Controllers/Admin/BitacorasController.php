<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;
use App\Bitacora;
use App\Order;
class BitacorasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $bitacoras = Bitacora::Buscador($request->id_pedido)->paginate(10);

        //return $categorias;
        return view('admin.seguimiento.index', compact('bitacoras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.seguimiento.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            
            'ubicacion' => 'required',
            'estado' => 'required',
            'descripcion' => 'required',
            
            'soporte' => 'required',//uasuario de antecion a clientes
            
        ]);




        $obj = Bitacora::create ([
            'ubicacion' =>$request->get('ubicacion'),
            'estado' =>$request->get('direccion'),
            'descripcion' =>$request->get('descripcion'),
         
            'soporte' => $request->get('soporte')

        ]);

        $mensaje = $obj ? 'Datos Actualizados!' : 'Hubo un Error :( !';
        
        return redirect()->route('seguimiento.index')->with('mensaje', $mensaje);
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seguimiento = Bitacora::find($id);
        return view('admin.seguimiento.editar',compact('seguimiento'));
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
        $this->validate($request, [
            
            'ubicacion' => 'required',
            'descripcion' => 'required',
            
            
            'soporte' => 'required']);
          
        
        $obj = Bitacora::find($id)->update($request->all());
           

        

        $mensaje = $obj ? 'Datos Actualizados!' : 'Hubo un Error :( !';
        
        return redirect()->route('seguimiento.index')->with('mensaje', $mensaje);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
