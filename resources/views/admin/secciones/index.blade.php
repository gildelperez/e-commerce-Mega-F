@extends('tiendaonline.plantilla')
@section('contenido')
@include('tiendaonline.secciones.slider')
     <h1>Listado de productos</h1>
<div class= "container">
	<div id="productos">
		@foreach($productos as $producto)
        <div class="producto white-panel">
		 <h2>{{$producto->nombre}}</h2><hr>
         <img src="{{$producto->imagen}}" width="200">
          <div class="producto-info panel">
             <h3>Precio:$ {{$producto->precio}}</h3>
             <p>{{$producto->descripcion}}</p>
             <p>
         	 <a class="btn btn-warning" href="{{route('carrito-agregar',$producto->id)}}"><i class="fa fa-cart-plus"></i>Agregar al carrito</a>
         	 <a class="btn btn-primary" href="{{route('producto-detalles',
         	 $producto->id)}}"><i class="fa fa.chevron-circle-right"></i>	Ver mas</a>
             </p>
          </div>
        </div>
         @endforeach
	</div>
</div>   
@endsection     