function ent(num,titulo){
	var dat={
		"numero":num,
		"tit":titulo
	};
	$.ajax({
		data:dat,
		url:'agrega_test.php',
		type:'POST',
		beforeSend:function(){
			$('#sub').val("Cargando...");
		},
		success:function(ap){
			$('#sub').val("Aceptar");
			$("#resp").html(ap);
		}
	});
}
function crear(){
	var cracion_datos = new FormData($('#cuestionario_creacion')[0]);
	$.ajax({
		url:'agrega_test2.php',
		data:cracion_datos,
		type:'POST',
		contentType:false,
		processData:false,
		beforeSend:function(){

		},
		success:function(respuesta){
			$("#resp").html(respuesta);
		}
	});
}
function responde(){
	var respuestas = new FormData($("#formul")[0]);
	$.ajax({
		url:'respuesta.php',
		data:respuestas,
		type:'POST',
		contentType:false,
		processData:false,
		beforeSend:function(){
			$("#formul").html("Terminando");
		},
		success:function(resu){
			$("#formul").html(resu);
		}
	});
}

