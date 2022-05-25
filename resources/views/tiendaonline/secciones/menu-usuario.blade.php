@if(Auth::check())
<li class="dropdown">
	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		{{ Auth::user()->name }}
		
		<i class="fa fa-user"></i>
	</a>
	
		
		
		<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		<a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-usuario">Mis datos </a>
	
		<a class="dropdown-item" href="{{url('/logout')}}"
		   onclick="event.preventDefault();
		   document.getElementById('logout-form').submit();">
		   Cerrar Sesion			   
		</a>
		
		<form id="logout-form" action="{{ url('/logout')}}" method="POST" style="display: none;" value = "{{csrf_token ()}}" >
			
			<input type = "hidden" name = "_token" value = "{{csrf_token ()}}" >
		</form>
		</div>
	
</li>
@else
<li class="nav-item dropdown">
	<a class="nav-link dropdown-toggle" href="{{url('/login')}}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<i class= "fa fa-user"> Ingresa</i>
	</a>
	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		<a class="dropdown-item" href="{{url('/login')}}">Iniciar Sesion</a>
		<a class="dropdown-item" href="{{url('/register')}}">Registrarse</a>
	</div>	
</li>
@endif


