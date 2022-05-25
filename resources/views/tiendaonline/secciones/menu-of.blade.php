<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>
     <a class="navbar-brand" href="{{ route('inicio')}}"><img src="{{ asset('img/icons/iconmegaof.ico')}}" width="20"></a>
     <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('inicio')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('orden-detalles')}}">Ver mi Orden<i class="fa fa-hourglass-start"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('miseguimiento')}}">Status pedido<i class="fa fa-list"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('carrito')}}">Carrito<i class="fa fa-shopping-cart"></i></a>
        </li>
        <li class="nav-item">
          <!--<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
          @include('tiendaonline.secciones.menu-usuario')
        </li>
      </ul>
      
      
        <!--Busqueda -->
        <form class="d-flex">
            {!!Form::open(['routes'=>'productos.index','method'=>'GET','class'=>'navbar-form'])!!}
            
    	   {!!Form::text('nombre',null,['class'=>'form-control','id'=>'nombre','placeholder'=>'Buscar productos ']) !!}
    	   {!!Form::submit('Buscar',array('class'=>'btn-primary'))!!}
           {!!Form::close()!!}
         
        </form> 
    </div>
  </div>
</nav>