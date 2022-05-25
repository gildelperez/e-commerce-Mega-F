@extends('tiendaonline.plantilla')
@section('titulo','Carrito')
@section ('contenido')



<div class="container text-center">
	@if(count($carrito))

	<p>
		<a href="{{route('carrito-vaciar')}}"
		class="btn- btn-danger">Vaciar Carrito
		<i class="fa fa-trash"> </i>
	     </a>

	</p>
	<div class="page-header">
		<h1><i class="fa fa-shopping-cart"></i>Carrito de Compras</h1>
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
				
				<td>{{number_format($item->precio * $item->cantidad,2)}}</td>
				 
					<td>
					<a href="{{ route('carrito-borrar', $item->idproducto)}}" class="btn btn-danger">
					<i class="fa fa-remove"></i>
				</a>
				</td>
			</tr>
			@endforeach
			</tbody>
		    </table>
		    <h3>
		    	<span class="label label-suces">Total: ${{number_format($total,2)}}</span>
		    </h3>
		</div>

		<a href="{{route('inicio')}}" class="btn btn-primary">
		<i class="fa fa-chevron-circle-left"></i>Seguir Comprando
	</a>

	<a href="{{route('orden-detalles')}}" class="btn btn-primary"><i class="fa fa-chevron-circle-right"></i>Continuar</a>
</p>    
      </div> 
      @else
      <h3>No hay productos agregados en el carrito</h3>
  @endif
       
</div>


@endsection