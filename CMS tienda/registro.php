<?php
	$idusu = rand(000,999);
	
	$cor = $_POST['cor'];
	$usu = $_POST['usu'];
	$con = $_POST['con'];
	$tip = $_POST['tip'];

	$conectar = new mysqli('localhost','root','','andrea');
	$inserta = 'INSERT INTO usuarios(idusu,tip,correo,usuario,contra)';
	$inserta.= 'VALUES("'.$idusu.'","'.$tip.'","'.$cor.'","'.$usu.'","'.$con.'")';

	if ($ejecuta = $conectar -> query($inserta)) {
		echo '1';
	}else{
		echo 'Error';
	}
?>