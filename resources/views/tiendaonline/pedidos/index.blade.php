@extends('tiendaonline.plantilla')
@section('titulo','Pedidos')

@section('contenido')



<div class="container text-center">
	<div class="page-header">
		<hk> <i class="fa fa-sticky-note"> Seguimiento de pedidos</i><br></hk>
		
	</div>
	<br>
	  <!--Busqueda -->
	  {!!Form::open(['route'=>'miseguimiento.index','method'=>'GET','class'=>'navbar-form'])!!}
      <div class="form-group">
    	{!!Form::text('id_pedido',null,['class'=>'form-control','id'=>'id_pedido','placeholder'=>'Buscar pedido por nombre de cliente']) !!}
    	<hr>
    	{!!Form::submit('Buscar',array('class'=>'btn-primary'))!!}

    </div>
    {!!Form::close()!!}


	
	
		

	<div class="contenidos">
		<div class="table-responsive">
			<table class="table table-stripedd table-hover table-bordered"> 
			<thead>
				<tr>
					
					
					<th style="color:black">	<i class="fa fa-user"><br> 				Usuario			</i></th>
					<th style="color:black">	<i class="fa fa-list-ol"><br> 			N° Pedido 				</i></th>			
					<th style="color:black">	<i class="fa fa-location-arrow"><br> 	Ubicacion de pedido		</i></th>
					<th style="color:black">	<i class="fa fa-hourglass-start"><br>	Estado del pedido		</i></th>			
					<th style="color:black">	<i class="fa fa-user"><br>				Atendio					</i></th>
					<th style="color:black">	<i class="fa fa-calendar"><br>			Fecha/Hora				</i></th>
					<th style="color:black">	<i class="fa fa-calendar"><br> 			Actualizado 	</i></th>
					
				</tr>
			</thead>
			<tbody>

			@foreach($bitacoras as $bitacora)
				
					<td>{{	$bitacora->user->name	}}</td>
					<td>{{	$bitacora->id_pedido	}}</td>
					<td>{{	$bitacora->ubicacion	}}</td>
					<td>{{	$bitacora->descripcion	}}</td>
					<td>{{	$bitacora->soporte		}}</td>
					<td>{{	$bitacora->created_at	}}</td>
					<td>{{	$bitacora->updated_at	}}</td>

														
					</tr>
				@endforeach
			</tbody>
			</table>
		</div>
	</div>
</div>
@endsection