@extends('admin.template')
@section('titulo','Seguimiento')
@section('contenido')


<?php 
use App\Categoria;
$categorias = Categoria::all();
    ?>

@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach

		</ul>
	</div>
@endif

<link rel="stylesheet" href="css/estilos.css">
<div class="container">
  <section class="abs-center">
    <div class="col-md-15 col-md-offset-3">
      
      <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Agregue Datos</h3>
        
        <div class="panel-body">          
          <div class="table-container">
          
            {!! Form::open(['route'=>'seguimiento.store','method' => 'POST', 'files' => true ]) !!}
           
              
              <div class="for-group">
                <div class="col-xs-12 col-sm-12 col-md-10">
                  <div class="form-group">
                    <input type="text" name="ubicacion" id="ubicacion" class="form-control input-sm" placeholder="Ubicacion del pedido">
                  </div>
                </div>
              </div>

              <div class="for-group">
                <div class="col-xs-12 col-sm-12 col-md-10">
                  <div class="form-group">
                    <input type="text" name="estado" id="estado" class="form-control input-sm" placeholder="estado del pedido">
                  </div>
                </div>
              </div>

              <div class="form-group">
				    	<label for="descripcion">Descripcion</label>
				    	{!!Form::textarea('descripcion', null, array(
				    	   'class'=>'form-control'
				    	    ))
				        !!}
				    </div>

              <div class="for-group">
                <div class="col-xs-12 col-sm-12 col-md-10">
                  <div class="form-group">
                    <input type="text" name="soporte" id="soporte" class="form-control input-sm" placeholder="atendio = user">
                  </div>
                </div>
              </div>

        

                <div class="for-group">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                  <input type="submit"  value="Guardar" class="btn btn-success btn-block">
                  <a href="{{ route('productos.index') }}" class="btn btn-info btn-block" >Cancelar</a>
                </div>  
 
              </div>
            </form>
          </div>
        </div>
 
      </div>
    </div>
  </section>
  @endsection