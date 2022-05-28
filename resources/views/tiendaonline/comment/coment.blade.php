<div class="clearfix"></div>

				<div class="well well bs-component">
			<form class="form-horizontal" method="post" action="/comment">

				@foreach($errors->all() as $error)
				<p class="alert alert-danger">{{ $error }}</p>
				@endforeach

				@if(session('status'))
				<div class="alert alert-danger">
					{{ session('status')}}
				</div>
				@endif

               
               <input type="hidden" name="post_id" value="{!! $productos->id !!}">
				
				

				<fieldset>
					<h4>Formu...en prueba</h4>
					<legend>Comentar</legend>
					<div class="form-group">
						<div class="col-lg-12">
						<textarea class="form-control" rows="3" id="content" name="content"></textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="col-lg-10 col-lg-ofset-2">
						<button type="reset"  class="btn btn-default">Cancelar</div>
						<button type="submit" class="btn btn-success">Publicar</div>
					</div>
				</div>
			</fielset>
		</form>
    </div>
</div>