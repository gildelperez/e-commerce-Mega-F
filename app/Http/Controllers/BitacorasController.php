<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bitacora;
class BitacorasController extends Controller
{
    public function index(Request $request)
    {
        $bitacoras = Bitacora::Buscador($request->id_pedido)->paginate();
        //return $categorias;
        return view('tiendaonline.pedidos.index', compact('bitacoras'));
    }
}
