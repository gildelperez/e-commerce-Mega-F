<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Redirect;
use App\Http\Requests\UserRequest;
class UserControllerV extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Controlador para validacion
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        


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
            
            'ciudad' => 'required|string|max:255',
            'codigo' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
           
        ]);




        $obj = User::create ([
            'ciudad' =>$request->get('ciudad'),
            'codigo' =>$request->get('codigo'),
            'descripcion' =>$request->get('descripcion')
            
        ]);

        $mensaje = $obj ? 'Guaradado correctamente!' : 'Hubo un Error :( !';
        
        return redirect()->route('secciones.index')->with('mensaje', $mensaje);
    }

    public function activate($code)
    {
        $users = User::where('code',$code);
        $exist = $users->count();
        $user = $users->first();
        if($exist == 1 and $user->active == 1)
        {
            $id = $user->id;
            return view('auth.date_complete',compact('id'));
        }else{
        return redirect::to('/');
     }
    }
    public function complete(UserRequest $request ,$id)
    {
        $user = User::find($id);
        $user->password = bcrypt($request->password);
        $user->active = 0;
        $user->save();
        return redirect::to('/login');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
