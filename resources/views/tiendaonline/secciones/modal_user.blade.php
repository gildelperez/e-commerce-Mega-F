<div class="modal fade" id="modal-usuario" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="gridSystemModalLabel">Actualiza o tus completa Datos</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="row">
        <div class="col-md-12">

          
				{!! Form::open(['route'=> 'completarinfo.store']) !!}
				    <div class="form-group">
				    	<label for="ciudad">Ciudad</label>
				    	{!!Form::text('ciudad', null, array(
				    	   'class'=>'form-control',
				    	   'placeolder'=>'Ingresa su ciudad'
				    	    ))
				        !!}
				    </div>
            
            <div class="form-group">
				    	<label for="cp">Codigo Postal</label>
				    	{!!Form::text('cp', null, array(
				    	   'class'=>'form-control',
				    	   'placeolder'=>'Ingresa el CP'
				    	    ))
				        !!}
				    </div>

				    <div class="form-group">
				    	<label for="descripcion">Calles Completas</label>
				    	{!!Form::textarea('descripcion', null, array(
				    	   'class'=>'form-control'
				    	    ))
				        !!}
				    </div>
				    <div class="form-group">
				    	{!! Form::submit('Guardar', array(
				    	    'class'=>'btn btn-primary'
				    	    ))
				    	!!}
				           	
				    </div>
				{!! form::close() !!}
      </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>