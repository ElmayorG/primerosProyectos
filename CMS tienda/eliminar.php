<?php
	$id_producto = $_POST['id_prod'];

	$conectar = new mysqli('localhost','root','','andrea');
	$borra = 'DELETE FROM productos WHERE id_p="'.$id_producto.'"';
	$a = 'SELECT * FROM productos WHERE id_p="'.$id_producto.'"';
	if($a_a = $conectar -> query($a)){
		$datos = $a_a -> fetch_array(MYSQL_ASSOC);
	}else{
		echo $conectar -> error;
		return false;
	}
	if($ejecuta = $conectar -> query($borra) && unlink($datos['foto'])){
		echo '1';
	}else{
		echo "No se ha podido eliminar el producto";
	}
?>