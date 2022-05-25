@extends('tiendaonline.plantilla')
@section('contenido')
@section('titulo','Todo para la construccion')

 <!-- <div class="container text-center">
   Formulario de busqueda
   {!!Form::open(['routes'=>'productos.index','method'=>'GET','class'=>'navbar-form'])!!}
    <div class="form-group">
       
    	   {!!Form::text('nombre',null,['class'=>'form-control','id'=>'nombre','placeholder'=>'Buscar productos ']) !!}
    	   {!!Form::submit('Buscar',array('class'=>'btn-primary'))!!}
        
      </div>
    {!!Form::close()!!}
    <hr>
   
</div>
-->

@include('tiendaonline.secciones.slider')

<div class= "container text-center">
<br>
<!-- Tarjet Productos -->
	<div id="productos">
		@foreach($productos as $producto)
        <div class="producto white-panel">
         <h2>{{$producto->nombre}}</h2><hr>
       
          <td><img src="{{$producto->imagen}}" width="200px"></td>

          <div class="producto-info panel">
             <h3>Precio:$ {{$producto->precio}}</h3><hr>
            
             <p>
         	 <a class="btn btn-warning" href="{{route('carrito-agregar',$producto->id)}}"><i class="fa fa-cart-plus"></i> Agregar al carrito</a>
         	 <a class="btn btn-primary" href="{{route('producto-detalles',
         	 $producto->id)}}"><i class="fa fa.chevron-circle-right"></i> Ver mas </a>
             </p>
          </div>
        </div>
         @endforeach
	</div>
</div>   

@stop    