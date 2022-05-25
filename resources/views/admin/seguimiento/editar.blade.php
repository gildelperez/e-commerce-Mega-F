@extends('admin.template')
@section('titulo','Actualizar')
@section('contenido')

<div class="container text-center">
	<div class="page-header">
		<h1>
			<i class="fa fa-pencil"></i>Seguimiento<small>[Actualizar datos]</small>
		</h1>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="contenidos">
            
            @if ($errors->any())
            	<div class="alert alert-danger">
	        	<ul>
		        	@foreach($errors->all() as $error)
			            <li>{{$error}}</li>
		        	@endforeach

	        	</ul>
	            </div>
            @endif
                
				{!! Form::model($seguimiento, ['route'=>['seguimiento.update' ,$seguimiento->id ],'files' => true]) !!}
				    <div class="form-group">
				    	<label for="ubicacion">Ubicacion del pedido</label>
				    	{!!Form::text('ubicacion', null, array(
				    	   'class'=>'form-control',
				    	   'placeolder'=>'Ingresa el nombre'
				    	    ))
				        !!}
                    </div>
                    
                    <div class="form-group">
				    	<label for="descripcion">Estado de pedido</label>
				    	{!!Form::textarea('descripcion', null, array(
				    	   'class'=>'form-control',
				    	   'placeolder'=>'Ingresa el nombre'
				    	    ))
				        !!}
                    </div>
                    
				    <div class="form-group">
				    	<label for="soporte">Atendio</label>
				    	{!!Form::textarea('soporte', null, array(
				    	   'class'=>'form-control'
				    	    ))
				        !!}
				    </div>
				    <div class="form-group">
				    	{!! Form::submit('Actualizar', array(
				    	    'class'=>'btn btn-primary'
				    	    ))
				    	!!}
				    	<a href="{{ route('seguimiento.index') }}" class="btn btn-warning">Cancelar</a>        	
				    </div>
				{!! form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection