@extends('tiendaonline.plantilla')
@section('titulo', 'Registrarme')
@section('contenido')
<link rel="stylesheet" href="css/estilos.css">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('direccion') ?'has-error' : '' }}">
                            <label for="direccion" class="col-md-4 control-label">Direccion</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" required autofocus>

                                @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                            <label for="telefono" class="col-md-4 control-label">Telefono</label>

                            <div class="col-md-6">
                                <input id="telefono" type="telefono" class="form-control" name="telefono" value="{{ old('telefono') }}" required>

                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>

                                <a class="btn btn-link" href="{{url('/login')}}">
                                   Ya tengo una cuenta
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop
