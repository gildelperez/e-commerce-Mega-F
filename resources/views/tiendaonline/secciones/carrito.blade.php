@extends('tiendaonline.plantilla')
@section('titulo','Carrito')
@section ('contenido')


<div class="container text-center">
	@if(count($carrito))
	

	    
	   <div class="page-header">
		<h1><i class="fa fa-shopping-cart"></i> Carrito de Compras</h1><br>
		<p>
		<a href="{{route('carrito-vaciar')}}"
		class="btn btn-danger">Vaciar Carrito
		<i class="fa fa-trash-o"> </i>
	     </a>
	   </p>
	</div>


	<div class="table responsive">
		<div class="tabla-carrito">
		  <table class="table table-striped table-hover table-bordered">
				<thead>
					<tr>
					<th>Imagen</th>
					<th>Producto</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Subtotal</th>
					<th>Eliminar</th>
					</tr>
				</thead>
			<tbody>
			@foreach($carrito as $item)
			<tr>
				<td><img src="{{ asset($item->imagen)}}"></td>
				<td>{{ $item->nombre }}</td>
				<td>{{ $item->precio }}</td>
				<td>
					<input type="number" min="1" max="50" value="{{ $item->cantidad}}" id="producto_{{ $item->id}}">

					<a href="" class="btn btn-warning btn-update-item"
					data-href="{{ route('carrito-actualizar', $item->id)}}"
					data-id="{{ $item->id }}">
					<i class="fa fa-refresh"> </i>	
					</a>


				</td>

				
				<td>${{number_format($item->precio * $item->cantidad,2)}}</td>
				 
					<td>
					<a href="{{ route('carrito-borrar', $item->id)}}" class="fa fa-trash-o">
					<i class="fa fa-remove"></i>
				</a>
				</td>
			    </tr>
			    @endforeach
			   </tbody>
    </table>
		        <h3>
		    	<span class="label label-primary">Total a Pagar: ${{number_format($total,2)}}</span>
		        </h3>
		        </div>
		       <a href="{{route('inicio')}}" class="btn btn-primary">
		       <i class="fa fa-shopping-cart"></i>  Seguir Comprando
	           </a>

	             <a href="{{route('orden-detalles')}}" class="btn btn-primary"> Continuar  <i class="fa fa-arrow-circle-right"></i></a>    
                </div> <br>
                @else
                 <h3>No hay productos agregados en el carrito</h3>
                   </div>
       
  @endif
</div>


@stop