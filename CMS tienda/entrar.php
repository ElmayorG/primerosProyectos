<?php
	$conecta = new mysqli('localhost','root','','andrea');
	$buscar = 'SELECT * FROM usuarios WHERE usuario="'.$_POST['usu'].'" AND contra="'.$_POST['con'].'"';
	if ($ejecuta = $conecta -> query($buscar)) {
		$existe = $ejecuta -> num_rows;
		if($existe == 1){
			$datos = $ejecuta -> fetch_array(MYSQL_ASSOC);
			echo '1';
			setcookie("idusu",$datos['idusu']);
			setcookie('tipo',$datos['tip']);
		}else{
			echo "Usuario no encontrado";
		}
	}else{
		echo "Ha ocurrido un error";
	}
?>