
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form class="d-flex">
{!!Form::open([
    'routes'=>'productos.index','method'=>'GET','class'=>'navbar-form'])!!} 

  {!!Form::text('nombre',null,['class'=>'form-control','id'=>'nombre','placeholder'=>'buscar un producto ']) !!}
  {!!Form::submit('Buscar',array('class'=>'btn-primary-small'))!!}
  
  {!!Form::close()!!}

</form>

</body>
</html>

