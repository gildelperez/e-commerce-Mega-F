<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    
     <a class="navbar-brand" href="{{ route('inicio')}}"><img src="{{ asset('img/icons/iconmegaof.ico')}}" width="20"></a>
     <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
     <ul class="nav justify-content-end">
     <!--Busqueda -->
    
       

     
        <li class="nav-item">
          <a class="nav-link" href="{{url('orden-detalles')}}">Mi Orden<i class="fa fa-hourglass-start"></i></a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link" href="{{route('carrito')}}">Carrito<i class="fa fa-shopping-cart"></i></a>
        </li>
        <li class="nav-item">
          <!--<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
          @include('tiendaonline.secciones.menu-usuario')
        </li>
        <li class="nav-item">
          @include('tiendaonline.secciones.search')
        </nav>
      </li>
      </ul>

     </div>


  </div>
  
</nav>