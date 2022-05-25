<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $categorias = Categoria::all();
        //return $categorias;
        return view('admin.categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorias.crear');
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
            
            'nombre' => 'required|unique:categorias|max:255',
            'codigo' => 'required',
            'descripcion' => 'required',
        ]);

        $obj = Categoria::create ([
            'nombre' =>$request->get('nombre'),
            'codigo' =>$request->get('codigo'),
            'descripcion' =>$request->get('descripcion'),
        ]);

        $mensaje = $obj ? 'Agregado correctamente!' : 'HA Ocurrido un Error :( !';
        return redirect()->route('categorias.index')->with('mensaje', $mensaje);
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
        $categorias=Categoria::find($id);
        return view('admin.categorias.editar',compact('categorias'));
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
        $this->validate($request,[ 'nombre'=>'required', 'codigo'=>'required','descripcion'=>'required']);

        $obj = categoria::find($id)->update($request->all());

        $mensaje = $obj ? 'Atualizado correctamente!' : 'HA Ocurrido un Error :( !';
        return redirect()->route('categorias.index')->with('mensaje', $mensaje);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Categoria::find($id)->delete();

        $mensaje = $obj ? 'Eliminado correctamente!' : 'HA Ocurrido un Error :( !';
        return redirect()->route('categorias.index')->with('mensaje', $mensaje);
       
    }
}
