@extends('tiendaonline.plantilla')
@section('titulo','Carrito')
@section ('contenido')



<div class="container text-center">

 	<div class="page-header">
 		<h1 style="color:black"> <i class="fa fa-shopping-cart"></i> Detalles de la orden </h1>

        <div class="table-responsive">
			
			
			<h3>Datos del usuario <i class="fa fa-user-circle-o"></i></h3>
		       
		    <table class="table table-striped table-hover table-borderless">
				<tr><td>Nombre</td><td>{{ Auth::user()->name }}</td></tr>
				<tr><td>Email</td><td>{{ Auth::user()->email }}</td></tr>
				<tr><td>Direccion</td><td>{{ Auth::user()->direccion }}</td></tr>
				<tr><td>Telefono</td><td>{{ Auth::user()->telefono }}</td></tr>
				<tr><td>Codigo Postal</td><td>{{ Auth::user()->cp }}</td></tr>
				<tr><td>Ciudad Envio </td><td>{{ Auth::user()->ciudad }}</td></tr>
				<tr><td>Colonia y Calles </td><td>{{ Auth::user()->descripcion }}</td></tr>
			</table>
	    </div>

       <div class="table-responsive">
	   <h3> Detalles de la Orden <i style="color:orange" class="fa fa-sticky-note-o"></i></h3>
		<table class="table table-striped table-hover table-bordered">
			<tr>
				<th>ID producto</th>
				<th>Producto</th>
				<th>Precio</th>
				<th>Cantidad</th>
				<th>Subtotal</th>
			</tr>
			@foreach($carrito as $item)
			<tr>
				<td>0{{$item->id}}
				<td>{{$item->nombre}}</td>
				<td>${{$item->precio}}</td>
				<td>{{$item->cantidad}}</td>
				<td>${{$item->precio * $item->cantidad}}</td>
			</tr>
			@endforeach
		  </table> 
         
		 <h7>Total: ${{number_format($total,2)}}</h7>
		  <hr>
	    </div>
		  <h6 style="color:black"> Nota: </h6>
		  <h6 style="color:green"> Su Numero de pedido se enviara a su correo registrado para que pueda darle seguimiento</h6>

    
	  <a href="{{route('inicio')}}" class="btn btn-primary">
		<i class="fa fa-shopping-cart"></i> Seguir Comprando</a>

     <a href="{{route('payment')}}" class="btn btn-primary">Pagar
		<i class="fa fa-cc-paypal fa-2X"></i></a>
      

	</div>	
</div>
</a>

@endsection

