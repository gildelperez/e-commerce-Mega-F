
$(document).ready(function() {

$('#productos').pinterest_grid({
no_columns: 4,
padding_x: 10,
padding_y: 10,
margin_bottom: 50,
single_column_breakpoint: 700

});

$(".btn-update-item").on('click', function(e){
	e.preventDefault();


	var id = $(this).data('id');
	var href = $(this).data('href');
	var cantidad = $("#producto_" + id).val();

	window.location.href = href + "/" + cantidad;

  });

});

