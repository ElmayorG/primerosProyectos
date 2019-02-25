function carga (argument) {
	switch(argument){
		case '2':
			$("#caja_ini").load('boletin.html');
		break;
		case '4':
			$("#caja_ini").load('entrar.html');
		break;
		case '6':
			$("#caja_ini").load('borrar.php');
		break;
		case '8':
			$("#caja_ini").load('sube_p.html');
		break;
		case 'alta':
			$("#caja_ini").load('alta.html');
		break;
		case 'c':
			$("#caja_ini").load('carrito.php');
		break;
	}
}
function entrar(){
	var datos = new FormData($("#fomr_e")[0]);
	$.ajax({
		data:datos,
		url:'entrar.php',
		type:'POST',
		contentType:false,
		processData:false,
		beforeSend:function(){

		},
		success:function(a){
			if (a == '1') {
				window.location='perfil.php'
			}
		}
	})
}

function sube_p(){
	var dats = new FormData($("#form_sube")[0]);
	$.ajax({
		data:dats,
		url:'sube_p.php',
		type:'POST',
		contentType:false,
		processData:false,
		beforeSend:function(){

		},
		success:function(a){
			if (a == '1') {
				$("#a").val('');
				$("#b").val('');
				$("#c").val('');
				$("#d").val('');
				$("#resp").html('<code>Se subio el producto correctamente</code>');
				setTimeout(function(){$("#resp").html('')},2000);
			}else{
				$("#resp").html(a);
			}
		}
	})
}
function elimina(id_prod,id_tabla){
	var id_p = {
		"id_prod":id_prod
	};
	$.ajax({
		data:id_p,
		url:'eliminar.php',
		type:'POST',
		beforeSend:function(){},
		success:function(si){
			if (si == '1') {
				$("#tabla_"+ id_tabla +'').fadeOut();
			}else{
				alert(si);
			}
		}
	});
}
function aparece_cat(tip){
	var cater={
		'tipo':tip
	}
	$.ajax({
		data:cater,
		url:'cate.php',
		type:'POST',
		beforeSend:function(){},
		success:function(categ){
			$("#caja_ini").html(categ)
		}
	})
}
function reg(){
	var reg = new FormData($("#form_v")[0]);
	$.ajax({
		data:reg,
		url:'registro.php',
		type:'POST',
		contentType:false,
		processData:false,
		beforeSend:function(){

		},
		success:function(aa){
			if (aa == '1') {
				$("#resp").html('<code>Se ha registrado correctamente</code>');
				setTimeout(function(){$("#resp").html('');},2000);
			}else{
				$("#resp").html(aa)
			}
		}
	})
}
function agrega(id_producto){
	var id_del_prod = {
		'id_p':id_producto
	};
	$.ajax({
		data:id_del_prod,
		url:'agrega.php',
		type:'POST',
		beforeSend:function(){},
		success:function(si_agrego){
			if (si_agrego == '1'){
				alert('Producto agregado al carrito');
			}
		}
	});
}