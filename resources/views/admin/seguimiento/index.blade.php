@extends('admin.template')
@section('titulo','Bitacora')
@section('contenido')

<div class="container text-center">
	<div class="page-header">
		<h1><i class="fa fa-sticky-note"> Seguimientos de pedidos</i><br></h1>
            <a class="btn btn-warning" href="{{route('seguimiento.create')}}"> Agregar para seguimiento<i class="fa fa-plus-circle"></i></a>
		
	</div>

	{!!Form::open(['route'=>'seguimiento.index','method'=>'GET','class'=>'navbar-form'])!!}
      <div class="form-group">
    	{!!Form::text('id_pedido',null,['class'=>'form-control','id'=>'id_pedido','placeholder'=>'Buscar pedido por nombre de cliente']) !!}
    	<hr>
    	{!!Form::submit('Buscar',array('class'=>'btn-primary'))!!}

    </div>
    {!!Form::close()!!}


	<div class="contenidos">
		<div class="table-responsive">
			<table class="table table-striped table-hover table-bordered"> <thead>
				<tr>
					
					<th>Actualizar datos </th>
					
					<th><i class="fa fa-user"><br>			Nombre Usuario</i></th>
					<th><i class="fa fa-list-ol"><br>		N° Pedido</i></th>
					
					<th><i class="fa fa-location-arrow"><br> Ubicacion de pedido</i></th>
					<th><i class="fa fa-hourglass-start"><br>Estado del pedido</i></th>
					
					<th><i class="fa fa-user"><br>			Atendio</i></th>
					<th><i class="fa fa-calendar"><br>		Creada Fecha/Hora</i></th>
					<th><i class="fa fa-calendar"><br>		Actualizado Fecha/Hora</i></th>
					
				</tr>
			</thead>
			<tbody>
			@foreach($bitacoras as $bitacora)
				
					
			<td>
				<a class="btn btn-primary" href="{{action('Admin\BitacorasController@edit', $bitacora->id)}}">
					<span class="fa fa-pencil-square"></span>
				</a>
			</td>

					<td>{{$bitacora->user->name}}</td>
					<td>{{$bitacora->id_pedido}}</td>
					<td>{{$bitacora->ubicacion}}</td>
					<td>{{$bitacora->descripcion}}</td>
					<td>{{$bitacora->soporte}}</td>
					
					<td>{{$bitacora->created_at}}</td>
					<td>{{$bitacora->updated_at}}</td>

														
					</tr>
				@endforeach
			</tbody>
			</table>
		</div>
	</div>
</div>
@endsection