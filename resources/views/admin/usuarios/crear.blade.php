@extends('admin.template')
@section('titulo','Crear categoria')
@section('contenido')

<link rel="stylesheet" href="css/estilos.css">

<div class="container text-center">
	<div class="page-header">
		<h1>
			<i class="fa fa-user"></i>Usuarios<small>[Agregar Usuario]</small>
		</h1>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="contenidos">


				@if(count($errors)>0)
				   @include('admin.secciones.errores')
				@endif

				<link rel="stylesheet" href="css/estilos.css">
				{!! Form::open(['route'=> 'usuarios.store']) !!}
				    <div class="form-group">
				    	<label for="name">Nombre</label>
				    	{!!Form::text('name', null, array(
				    	   'class'=>'form-control',
				    	   'placeolder'=>'Ingresa el nombre'
				    	    ))
				        !!}
				    </div>
				    <div class="form-group">
				    	<label for="direccion">Direccion</label>
				    	{!!Form::text('direccion', null, array(
				    	   'class'=>'form-control'
				    	    ))
				        !!}
				    </div>
				       <div class="form-group">
				    	<label for="email">Email</label>
				    	{!!Form::text('email', null, array(
				    	   'class'=>'form-control'
				    	    ))
				        !!}
				    </div>
				     <div class="form-group">
				    	<label for="password">Contraseña</label>
				    	{!!Form::text('password', null, array(
				    	   'class'=>'form-control'
				    	    ))
				        !!}
				    </div>
				    <div class="form-group">
				    	{!! Form::submit('Guardar', array(
				    	    'class'=>'btn btn-primary'
				    	    ))
				    	!!}
				    	<a href="{{ route('usuarios.index') }}" class="btn btn-warning">Cancelar</a>        	
				    </div>
				{!! form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection