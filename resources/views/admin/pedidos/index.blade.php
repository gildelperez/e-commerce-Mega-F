@extends('admin.template')
@section('titulo','Pedidos')

@section('contenido')


<div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-shopping-cart"></i> Pedidos
            </h1>
        </div>
        
        <div class="page">
            
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            
                            <th>Eliminar</th> 
                            <th>Cliente</th>
                            <th>N° Orden </th>                           
                            <th>Subtotal</th>
                            <th>Envio</th>
                            <th>Total</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pedidos as $pedido)
                            <tr>
                                {!! Form::open(['route' => ['pedidos.destroy', $pedido->id], 'method' => 'DELETE']) !!}
            <td class="text-center">
                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="fa fa-trash" aria-hidden="true"></span>
                </button>               
            </td>
        {!! Form::close() !!}
                                <td>{{ $pedido->user->name}}</td>
                                <td>N{{ number_format($pedido->order_id) }}</td>
                                <td>${{ number_format($pedido->subtotal,2) }}</td>
                                <td>${{ number_format($pedido->envio,2) }}</td>
                                <td>${{ number_format($pedido->subtotal + $pedido->envio,2) }}</td>
                                 <td>{{ $pedido->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
            
            
            
        </div>
    </div>
    
  
    
@endsection