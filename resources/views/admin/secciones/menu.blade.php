
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

<a class="navbar-nav" href="{{ route('back.index')}}">
<img src="{{ asset('img/megalogof.jpg') }}" width="200"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">

	<li class="nav-item"><a class="nav-link" href="{{ route('inicio')}}" >Tienda</a></li>

	
      
     
	  @include('tiendaonline.secciones.menu-usuario')
  
	
	  

	</ul>

</div>
</nav>