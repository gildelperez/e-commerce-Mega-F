<!doctype html>
<html lang="en">

     <head>
         <meta charset="utf-8">
	     <link rel="stylesheet" href="{{ asset ('css/estilo.css') }}">
	     <link rel="stylesheet" href="{{ asset ('css/main.css') }}">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	     <title>Mega Ferreterias- @yield('titulo')</title>
          <link rel="icon" href="img/icons/iconmega.ico">
          <!--- Trabajar con bootstrap menus -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cerulean/bootstrap.min.css">
	     <!--- Iconos desde bootstrap -->
	     <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     </head>

     <body>
      <div class="container-fluid">
          @include('tiendaonline.secciones.menu-of')
          </div>
           @if(\Session::has('mensaje'))
           @include('tiendaOnLine.secciones.mensajes')
          @endif
    
         
          @yield('contenido')
          @include('tiendaonline.secciones.footer')
          <!---Jquery google-->
           @if(Auth::check())
           @include('tiendaonline.secciones.modal_user')
          @endif

	 
     </body>
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <!--- Jquery bootstrap -->
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

     <script src="{{ asset('js/pinterest_grid.js') }}"></script>
     <script  src="{{ asset('js/main.js') }}"></script>
     <script type="text/javascript"  src="{{asset('js/main.js') }}" ></script>
   
</html>
	
