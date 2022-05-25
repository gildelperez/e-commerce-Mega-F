@extends('tiendaonline.plantilla')
@section('titulo','Mas detalles')
@section('contenido')

  <div class="container">
  <h3>Detalles del producto</h3>
   <div class="row">
   
		<div class="col-md-5">
			<div class="bloque-producto">
			<img src="{{asset($productos->imagen) }}" width="100">
			</div>	
		</div>
		
		
			
		<div class="col-md-7">
			<div class="bloque-producto">
				<h3 style="color:green"> {{ $productos->nombre }}</h3><hr>
				<div class="productos-info panel">
					<p style="color:gray">{{$productos->descripcion}}</p>
					<h5 style="color:black">Stock: {{$productos->idestado}}</h5>
					<h5 style="color:black">Categoria: {{$productos->categorias->nombre}}</h5>
						<h3>
						<span style="color:black" class="label label-success">Precio: ${{ number_format($productos->precio,2) }}</span>
					</h3>
					<p>
						<a class="btn btn-warning" href="{{route('carrito-agregar',$productos->id)}}">
						<i class="fa fa-cart-plus"></i> Agregar al carrito</a>
					</p>
					<i style="color:black" class="fa fa-reply"></i> <a href="{{route('inicio')}}">Regresar</a>
				</div>
			</div>	
		</div>
	</div>
	<hr>
	@include('tiendaonline.comment.coment')

@stop
