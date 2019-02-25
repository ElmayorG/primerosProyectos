<?php
	$coneccion=@mysql_connect('localhost','root','');
	$conecta=@mysql_select_db('prueva',$coneccion);
	$nombre = $_POST['nombre_bus'];
	if($nombre != ""){
		$espacios=explode(" ", $nombre);
		$total=count($espacios);
		if($total == 1){
			$extencion=@mysql_query("SELECT * FROM prueva1 WHERE Titulo LIKE '%".$nombre."%' LIMIT 0,5")or die(mysql_error());
			$resulatado =@mysql_fetch_array($extencion);
			echo "Resulatados para ".$nombre;
			echo"<div><a href='articulo.php?id=".$resulatado['id_ar']."'>".$resulatado['Titulo']."</a></div>";
		}else if($total >= 1){
			$extencion=@mysql_query("SELECT * FROM prueva1 WHERE MATCH(Titulo,Contenido) AGAINST ('".$nombre."') LIMIT 0,5")or die(mysql_error());
			$resulatado =@mysql_fetch_array($extencion);
			echo "Resulatados para ".$nombre;
			echo"<div><a href='articulo.php?id=".$resulatado['id_ar']."'>".$resulatado['Titulo']."</a></div>";
		}elseif($nombre == null){
			echo "";
		}

	}
?>