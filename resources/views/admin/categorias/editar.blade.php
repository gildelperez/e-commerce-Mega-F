@extends('admin.template')
@section('titulo','Editar categoria')
@section('contenido')
<div class="container">
	<section class="abs-center">
		<div class="col-md-12 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
 
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Editar Categoria</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('categorias.update',$categorias->id) }}"  role="form">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PATCH">
							<div class="row">
								<label for="inputEmail1" class="col-lg-2 control-label">Nombre</label>
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<input type="text" name="nombre" id="nombre" class="form-control input-sm" value="{{$categorias->nombre}}">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-2 control-label">Codigo</label>
								<textarea name="codigo" class="form-control input-sm"  placeholder="codigo">{{$categorias->codigo}}</textarea>
							</div>

							<div class="form-group">
								<label for="inputEmail1" class="col-lg-2 control-label">Descripcion</label>
								<textarea name="descripcion" class="form-control input-sm"  placeholder="Descripcion">{{$categorias->descripcion}}</textarea>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Actualizar" class="btn btn-success btn-block">
									<a href="{{ route('categorias.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	
 
							</div>
						</form>
					</div>
				</div>
 
			</div>
		</div>
	</section>
	@endsection