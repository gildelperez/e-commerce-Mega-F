
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
 <div class="container-fluid">
 <a class="navbar-brand" href="{{ route('inicio')}}"><img src="{{ asset('img/icons/icon.ico')}}" width="15"></a>

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	<div class="navbar-nav mr-auto ml-auto text-center">
		<br>
		
		  <a class="nav-item nav-link" href="{{url('orden-detalles')}}">Ver mi Orden &nbsp<i class="fa fa-hourglass-start"> </i></a>
      <a class="nav-item nav-link" href="{{url('miseguimiento')}}">Estatus de mis pedidos &nbsp<i class="fa fa-list"></i></a>
      <a class="nav-item nav-link" href="{{route('carrito')}}">Carrito &nbsp<i class="fa fa-shopping-cart"></i></a>
		
      @include('tiendaonline.secciones.menu-usuario')

  </div>
	  </div>
  </div>
</nav>

