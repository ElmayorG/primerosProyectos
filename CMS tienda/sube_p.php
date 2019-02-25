<?php
	$nombre = htmlentities($_POST['nom']);
	$precio = $_POST['pres'];
	$cat = $_POST['cat'];
	$foto = $_FILES['foto'];
	$idp = rand(000,999);

	if($nombre == ''){
		echo "Ponga un nombre";
		return false;
	}
	if($precio == ''){
		echo "Ponga un precio";
		return false;
	}
	if ($foto['name'] == '') {
		echo "Ponga una foto";
		return false;
	}

	$nuevo_nom = 'img_pro/'.$idp.'_'.rand(0000,9999).'_'.$foto['name'];
	if (copy($foto['tmp_name'],$nuevo_nom)) {
		$conectar = new mysqli('localhost','root','','andrea');
		$ejecuta = 'INSERT INTO productos(nombre,id_p,foto,precio,cat)VALUES';
		$ejecuta.= '("'.$nombre.'","'.$idp.'","'.$nuevo_nom.'","'.$precio.'","'.$cat.'")';
		if($crea = $conectar -> query($ejecuta)){
			echo '1';
		}else{
			echo('Hubo un error');
		}

	}else{
		echo "Error al copiar la imagen";
	}
?>