<?php
	$coneccion=@mysql_connect('localhost','root','');
	$conecta=@mysql_select_db('prueva',$coneccion);
	$nombre = $_GET['bus'];
	if($nombre != ""){
		$espacios=explode(" ", $nombre);
		$total=count($espacios);
		if($total == 1){
			$extencion=@mysql_query("SELECT * FROM prueva1 WHERE Titulo LIKE '%".$nombre."%' LIMIT 0,5")or die(mysql_error());
			$resulatado =@mysql_fetch_array($extencion);
			echo "Resulatados para ".$nombre;
			echo"<div>".$resulatado['Titulo']."</div>";
		}else if($total >= 1){
			$extencion=@mysql_query("SELECT * FROM prueva1 WHERE MATCH(Titulo,Contenido) AGAINST ('".$nombre."') LIMIT 0,5")or die(mysql_error());
			$resulatado =@mysql_fetch_array($extencion);
			echo "<center>Resulatados para: <b>".$nombre."</b></center>";
			echo"<div>".$resulatado['Titulo']."</div>";
		}elseif($nombre == null){
			echo "";
		}

	}
?>