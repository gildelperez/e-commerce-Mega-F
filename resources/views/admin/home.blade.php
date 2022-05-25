@extends('admin.template')
@section('titulo', 'Administracion')
@section('contenido')

<div class="container text-center">
	<div class="page-header">
	<h1><i class="fa fa-rocker"></i>Panel Administracion</h1>
		<h1><i class="fa fa-rocker"></i>Tienda-Online MEGA FERRETERIAS </h1>
	</div>
	<h3>Bienvenido(a){{ Auth::user()->name}} al panel de Administracion</h3><hr>
	<div class="row">
		<div class="col-md-6">
			<div class="panel">
				<i class="fa fa-list-alt icon-home"></i>
				<a href="{{ route('categorias.index')}}" class="btn btn-success btn-block btn-home-admin">Categorias</a>
			</div>
		</div>

		<div class="col-md-6">
			<div class="panel">
			<i class="fa fa-shopping-cart icon-home"></i>
			<a href="{{ route('productos.index')}}" class="btn btn-success btn-block btn-home-admin">Productos</a>
			</div>
		</div>
	</div>

	<div class="row">
         <div class="col-md-6">
			<div class="panel">
				<i class="fa fa-cc-paypal icon-home"></i>
				<a href="{{ route('pedidos.index')}}" class="btn btn-success btn-block btn-home-admin">Pedidos</a>
			</div>
		</div>
    	<div class="col-md-6">
			<div class="panel">
				<i class="fa fa-users icon-home"></i>
				<a href="{{ route('usuarios.index')}}" class="btn btn-success btn-block btn-home-admin">Usuarios</a>
			</div>
		</div>
		

		<div class="col-md-6">
			<div class="panel">
				<i class="fa fa-sticky-note icon-home"></i>
				<a href="{{ route('seguimiento.index')}}" class="btn btn-outline-success btn-block btn-home-admin">Seguimientos</a>
			</div>
		</div>


	</div>
@endsection