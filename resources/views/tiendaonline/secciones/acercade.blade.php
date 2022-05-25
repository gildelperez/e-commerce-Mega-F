@extends('tiendaonline.plantilla')

@section('contenido')
<div id="contenidos-paginas">
		<div id="centro3">
			<h1>
				<em class="encabezados t1">Mega Ferreterías</em>
				<img src="{{asset('img/megalogo.JPG')}}" class="avatar"><hr> 				
			</h1>
			<p class="descripcion-pagina">
				Tienda en linea de productos ferreteros. Cuenta con todo tipo de material de ferretería, como herramientas para la construcción, herramientas eléctricas, herramientas para el hogar y jardinería, pizos, etc...
			</p>
			<hr>

			<div id="contenido-nosotros">
				<h4>Vision</h4>
				<p class="descripcion-pagina texto-nosotros">
					
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			</div>

			<div id="contenido-nosotros">
				<h4>Mision</h4>
				<p class="descripcion-pagina texto-nosotros">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			</div>
			<a class="btn btn-primary" href="{{route('inicio')}}"><i class="fa fa-chevron-circle-left"></i> Regresar
		</a>
	</p>
		</div>
	</div>
@endsection   

	
	
	