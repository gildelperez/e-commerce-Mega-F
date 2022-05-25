@extends('admin.template')
@section('titulo','Crear Producto')
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
          <h3 class="panel-title">Agregar Producto</h3>
        
        <div class="panel-body">          
          <div class="table-container">
          
            {!! Form::open(['route'=>'productos.store','method' => 'POST', 'files' => true ]) !!}
           

              

              <div class="form-group">
             <label for="imagen">Archivo</label>
             </div>
	        	{!! Form::file('imagen')!!}
                
              <div class="for-group">
                <div class="col-xs-12 col-sm-12 col-md-10">
                  <div class="form-group">
                    <input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre del producto">
                  </div>
                </div>
              </div>

              <div class="for-group">
                <div class="col-xs-12 col-sm-12 col-md-10">
                  <div class="form-group">
                    <input type="text" name="codigo" id="codigo" class="form-control input-sm" placeholder="Codigo del producto">
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
                    <input type="text" name="precio" id="precio" class="form-control input-sm" placeholder="Precio del producto">
                  </div>
                </div>
              </div>

        <div class="for-group">
        <label for="inputEmail1" class="col-lg-4 control-label">Categoria</label>
    
        <div class="col-md-8">
      
      <select name="idcategoria" class="form-control">
        <option value="">-Seleciona-</option>
        <?php foreach($categorias as $categoria):?>
        <option value="<?php echo $categoria->id;?>"><?php echo $categoria->nombre;?></option>
        <?php endforeach;?>
        </select>    
      </div>
      
      <br>
                <div class="for-group">
                <div class="col-xs-12 col-sm-12 col-md-10">
                  <div class="form-group">
                    <input type="text" name="idestado" id="idestado" class="form-control input-sm" placeholder="Estock del producto">
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