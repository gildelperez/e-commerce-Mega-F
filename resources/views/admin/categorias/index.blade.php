@extends('admin.template')
@section('titulo','Administrador de Categorias')
@section('contenido')

<div class="container text-center">
	<div class="page-header">
		<h1><i class="fa fa-list"></i> Categorias</h1><br>
            <a   class="btn btn-warning" href="{{route('categorias.create')}}">Nueva Categoria <i class="fa fa-plus-circle"></i></a>
	</div>
	<div class="contenidos">
		<div class="table-responsive">
			<table class="table table-striped table-hover table-bordered"> <thead>
				<tr>
					
					<th>Editar</th>
					<th>Eliminar</th>
					<th>Nombre</th>
					<th>Descripcion</th>

				</tr>
			</thead>
			<tbody>
				@foreach($categorias as $categoria)
				<tr>
					<td><a class="btn btn-primary" href="{{action('Admin\CategoriasController@edit', $categoria->id)}}" ><span class="fa fa-pencil-square"></span></a></td>

					{!! Form::open(['route' => ['categorias.destroy', $categoria->id], 'method' => 'DELETE']) !!}
            <td class="text-center">
                <button type="submit" class="btn btn-danger">
                    <span class="fa fa-trash" aria-hidden="true"></span>
                </button>               
            </td>
        {!! Form::close() !!}
        
					<td>{{$categoria->nombre}}</td>
					<td>{{$categoria->descripcion}}</td>
					
				</tr>
				@endforeach
			</tbody>
			</table>
		</div>
	</div>
</div>
@endsection

