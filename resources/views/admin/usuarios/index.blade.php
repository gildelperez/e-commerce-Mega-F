@extends('admin.template')
@section('titulo','Administrador de Categorias')
@section('contenido')

<div class="container text-center">
	<div class="page-header">
		<h1><i class="fa fa-users"> Usuarios</i><br>
			<a class="btn btn-warning" href="{{route('usuarios.create')}}">
			 Registrar Usuario <i class="fa fa-plus-circle"></i></a>
			</h1>
	</div>


	<br>
		
	<div class="contenidos">
		<div class="table-responsive">
			<table class="table table-striped table-hover table-bordered"> <thead>
				<tr>
					
					<th>Editar</th>
					<th>Eliminar</th>
					<th><i class="fa fa-user"> Usuario</i></th>
					<th>Direccion</th>
					<th>Email</th>

				</tr>
			</thead>
			<tbody>
				@foreach($usuarios as $user)
				<tr>
					<td><a class="btn btn-primary btn-xs" href="{{action('Admin\UsuariosController@edit', $user->id)}}" ><span class="fa fa-pencil-square"></span></a></td>
					
					{!! Form::open(['route' => ['usuarios.destroy', $user->id], 'method' => 'DELETE']) !!}
            <td class="text-center">
                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="fa fa-trash" aria-hidden="true"></span>
                </button>               
            </td>
        {!! Form::close() !!}
					<td>{{$user->name}}</td>
					<td>{{$user->direccion}}</td>
					<td>{{$user->email}}</td>
					
				</tr>
				@endforeach
			</tbody>
			</table>
		</div>
	</div>
</div>
@endsection