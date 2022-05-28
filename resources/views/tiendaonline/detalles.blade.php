@extends('tiendaonline.plantilla')
@section('titulo','Mas detalles')
@section('contenido')

  <div class="container">
  <h7>Caracteristicas</h7>
   <div class="row">
   
		<div class="col-md-5">
			<div class="bloque-producto">
			<img src="{{asset($productos->imagen) }}" width="100">
			</div>	
		</div>
		
		
			
		<div class="col-md-7">
			<div class="bloque-producto">
				<h3 style="color:black"> {{ $productos->nombre }}</h3>
				<div class="productos-info panel">
					<p style="color:gray">{{$productos->descripcion}}</p>
					<h5 style="color:black">Disponibles: {{$productos->idestado}}</h5>
					<h5 style="color:black">Categoria: {{$productos->categorias->nombre}}</h5>
					<h4>
						<span style="color:black" class="label label-success">Precio: ${{ number_format($productos->precio,2) }}</span>
					</h4>
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
