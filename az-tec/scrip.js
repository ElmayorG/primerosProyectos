function busqueda_barra(nombre){
	var nom_bus={
		"nombre_bus" : nombre
	};
	$.ajax({
		data: nom_bus,
		url:'busqueda_bar.php',
		type: 'post',
		beforeSend: function(){
			$("#res_bus").html("<b>Buscando...</b>");
		},
		success: function(respuesta){
			$("#res_bus").html(respuesta);
		}
	});
}
function busq(nombre){
	$("#cortina").show();
	$("#busqueda").append('<iframe class="frame" id="fr_bs" src="busqueda.php?bus=' + nombre + '" width="100%" height="70%"></iframe');
}
function revisa(ser_1,ser_2,ser_3){
	var verificacion={
		"ser_1":ser_1,
		"ser_2":ser_2,
		"ser_3":ser_3
	};
	$.ajax({
		data:verificacion,
		url:'verif_seg.php',
		type:'post',
		beforeSend: function(){
			$("#veri").html();
		},
		success: function(resp){
			if(resp == 1){
				$("#veri").html("Existe");
			}else{
				$("#veri").html("No Existe");
			}
		}
	});
}
function agreg(id_ar,pz){
	var id_a={
		"id_ar":id_ar,
		"pz":pz
	};
	$.ajax({
		data:id_a,
		url:'agregar_car.php',
		type:'post',
		beforeSend: function(){

		},
		success: function(resp){
			if(resp == 'ok'){
				$("#agregado").html('Agregado');
			}else{
				$("#agregado").html('Ha ocurriod un error');
				$("#agregado").html(resp);
			}
		}
	});
}