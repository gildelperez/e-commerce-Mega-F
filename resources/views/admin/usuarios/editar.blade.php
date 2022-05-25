@extends('admin.template')
@section('titulo','Editar categoria')
@section('contenido')
<div class="row">
  <section class="content">
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
          <h3 class="panel-title">Editar Usuario</h3>
        </div>
        <div class="panel-body">          
          <div class="table-container">
            <form method="POST" action="{{ route('usuarios.update',$usuarios->id) }}"  role="form">
              {{ csrf_field() }}
              <input name="_method" type="hidden" value="PATCH">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">

                  <div class="form-group">
                    <label for="inputEmail1" class="col-lg-1 control-label">Nombre*</label>
                    <input type="text" name="name" id="name" class="form-control input-sm" value="{{$usuarios->name}}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <label for="inputEmail1" class="col-lg-1 control-label">Direccion*</label>
                    <input type="text" name="direccion" id="codigo" class="form-control input-sm" value="{{$usuarios->direccion}}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <label for="inputEmail1" class="col-lg-1 control-label">Email*</label>
                    <input type="text" name="email" id="email" class="form-control input-sm" value="{{$usuarios->email}}">
                  </div>
                </div>
              </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <input type="submit"  value="Actualizar" class="btn btn-success btn-block">
                  <a href="{{ route('usuarios.index') }}" class="btn btn-info btn-block" >Atrás</a>
                </div>  
 
              </div>
            </form>
          </div>
        </div>
 
      </div>
    </div>
  </section>
  @endsection