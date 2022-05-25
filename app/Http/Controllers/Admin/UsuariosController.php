<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        //return $categorias;
        return view('admin.usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuarios.crear');
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
            
            'name' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'telefono' => 'required|string|telefono|max:10|unique:users',
            'password' => 'required|string|min:8|',
        ]);




        $obj = User::create ([
            'name' =>$request->get('name'),
            'direccion' =>$request->get('direccion'),
            'email' =>$request->get('email'),
            'telefono' =>$request->get('telefono'),
            'password' => bcrypt($request->get('password'))

        ]);

        $mensaje = $obj ? 'Agregado correctamente!' : 'Hubo un Error :( !';
        
        return redirect()->route('usuarios.index')->with('mensaje', $mensaje);
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
        $usuarios=User::find($id);
        return view('admin.usuarios.editar',compact('usuarios'));
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
         $this->validate($request,[ 'name'=>'required', 'direccion'=>'required', 'email'=>'required','telefono'=>'required']);

        $obj = user::find($id)->update($request->all());
        

        $mensaje = $obj ? 'Dato actualizado correctamente!' : 'HA Ocurrido un Error :( !';
        
        return redirect()->route('usuarios.index')->with('mensaje', $mensaje);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $User = User::find($id);
        $User->delete();
       

        $mensaje = $User ? 'Usuario Eliminado correctamente!' : 'HA Ocurrido un Error :( !';
        
        return redirect()->route('usuarios.index')->with('mensaje', $mensaje);
    }
}
