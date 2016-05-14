
$('#btn_Comunidad').click(function() {
	var comunidad =$('#nombre').val();
	var descripcion=$('#descripcion').val();
	var token=$("#token").val();

	$.ajax({
		url: 'http://localhost:8000/welcomeAdmin/Comunidades/crearComunidad',
		type: 'POST',
		headers :{'X-CSRF-TOKEN': token},
		dataType: 'json',
		data: {comunidad:comunidad, descripcion:descripcion},
		success:function(data){
				alert(data.mensaje);
				$('#nombre').val("");
				$('#descripcion').val("");
		}
	});
});