@extends('admin.template')
@section('titulo','Administrador de Categorias')
@section('contenido')
<?php 
use App\Categoria;
$categorias = Categoria::all();
    ?>
<div class="container text-center">
	<div class="page-header">
		<h1>Productos <i class="fa fa-shopping-cart"></i><br>
            <a class="btn btn-warning" href="{{route('productos.create')}}">Agregar nuevo <i class="fa fa-plus-circle"></i></a>
		</h1>
	</div>

	{!!Form::open(['routes'=>'productos.index','method'=>'GET','class'=>'navbar-form'])!!}
    <div class="form-group">
       
    	   {!!Form::text('codigo',null,['class'=>'form-control','id'=>'codigo','placeholder'=>'Buscar productos ']) !!}<br>
    	   {!!Form::submit('Buscar un producto',array('class'=>'btn-primary'))!!}
        
      </div>
	{!!Form::close()!!}
	
    <hr>
    
	<div class="contenidos">
		<div class="table-responsive">
			<table class="table table-striped table-hover table-bordered"> <thead>
				<tr>
					
					<th>Editar</th>
					<th>Eliminar</th>
					<th>Imagen</th>
					<th>Codigo</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Precio</th>
					<th>Stock</th>
				</tr>
			</thead>
			<tbody>
				@foreach($productos as $producto)
				<tr>
					<td><a class="btn btn-primary" href="{{action('Admin\ProductosController@edit', $producto->id)}}" ><span class="fa fa-pencil-square"></span></a></td>
					

						{!! Form::open(['route' => ['productos.destroy', $producto->id], 'method' => 'DELETE']) !!}
            			<td class="text-center">
                		<button type="submit" class="btn btn-danger">
                    		<span class="fa fa-trash" aria-hidden="true"></span>
							
                		</button>               
            			</td>
        				{!! Form::close() !!}
              
						<td><img src="{{url($producto->imagen)}}" width="150px"></td>
                    <td>{{$producto->codigo}}</td>
					<td>{{$producto->nombre}}</td>
					<td>{{$producto->descripcion}}</td>
					<td>{{$producto->precio}}</td>
					<td>{{$producto->idestado}}</td>

														
					</tr>
				@endforeach
			</tbody>
			</table>
		</div>
	</div>
</div>
@endsection