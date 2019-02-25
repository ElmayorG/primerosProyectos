<?php
	function existe_garantia($ser_1,$ser_2,$ser_3){
		if($ser_1 != NULL && $ser_2 != NULL && $ser_3 != NULL){
			$ser1=strlen($ser_1);
			$ser2=strlen($ser_2);
			$ser3=strlen($ser_3);
			if ($ser1 >= 4 && $ser2 >= 10 && $ser3 >= 4) {
				$sql1=@mysql_query("SELECT * FROM garantias WHERE ser_1='".$ser1."'");
			}
		}
	}
	function buscar_bar($nombre_bus){
		$extencion=@mysql_query("SELECT * FROM prueva1 WHERE MATCH(Titulo,Contenido) AGAINST ('".$nombre_bus."')")or die(mysql_error());
		$resulatado =@mysql_fetch_array($extencion);
		echo "<div>".$resulatado['Titulo']."</div>";
	}
?>