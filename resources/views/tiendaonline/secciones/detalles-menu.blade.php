<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="{{ route('inicio')}}"><img src="{{ asset('img/megalogo1.jpg') }}" width="10"></a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	<div class="navbar-nav mr-auto ml-auto text-center">
		<br>
		<a class="nav-item nav-link" href="{{url('Acercade')}}">Categorias</a>
		<a class="nav-item nav-link" href="{{url('contacto')}}">Contacto</a>
		
		 		
	    <a class="nav-item nav-link" href="{{route('carrito')}}"><i class="fa fa-shopping-cart"></i>MI CARRITO</a>
		

        @include('tiendaonline.secciones.menu-usuario')

	</div>
	

 </div>
 <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
 
</nav>

