<?php
	$id_producto = $_POST['id_p'];
	$conectar = new mysqli('localhost','root','','andrea');
	$genera = 'SELECT * FROM productos WHERE id_p="'.$id_producto.'"';
	$ejecuta = $conectar -> query($genera);
	$datos = $ejecuta -> fetch_array(MYSQL_ASSOC);

	if (empty($_COOKIE['idusu'])) {
		$id = $_COOKIE['id_sesion'];
	}else{
		$id = $_COOKIE['idusu'];
	}

	$insterta = 'INSERT INTO carrito (id_sesion,id_prod,precio) VALUES';
	$insterta.= '("'.$id.'","'.$datos['id_p'].'","'.$datos['precio'].'")';

	if($ejecuta = $conectar -> query($insterta)){
		echo '1';
	}

?>