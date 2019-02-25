<?php
	require('conex.php');
	$preg=$_POST['preg'];
	preguntas($preg);
	function preguntas($preg = array())
	{
		$i = 0;
		$a = 0;
			foreach ($preg as $pregun){
				$preguntas=$_POST['preg'][$i];
				$tip=$_POST['tip'][$i];
				$desc=$_POST['desc'][$i];
					if($preguntas == ""){
						$a += 0;
					}else{
						$a += 1;
					}
					$i++;
	}
		if($a==5){
			entra($preg);
		}else{
			echo "<span id='error'>Algunos campos estan vacios intenta de nuevo</span>";
		}	
	}
	function entra($preg = array()){
		$i = 0;
		$a = 0;
		$id_preg=rand(000000000,999999999);
		$sha1=sha1($id_preg);
		$tit=$_COOKIE['tit'];
		foreach ($preg as $pregun){
			$preguntas=$_POST['preg'][$i];
			$tip=$_POST['tip'][$i];
			$desc=$_POST['desc'][$i];
			$en=htmlentities($preguntas);
			$on=htmlentities($desc);
			$guarda=mysql_query("INSERT INTO preguntas (id_preg,preg,num_preg,tip,descri) VALUES ('".$sha1."','".$en."','".$i."','".$tip."','".$on."')")or die(mysql_error());
						if($guarda){
							$a = $a + 1;
						}else{
							$a = $a + 0;
						}
			$i++;
		}
		if($a < 5){
			 echo "<span id='error'>Erro al guardar las preguntas</span>";
		}elseif($a == 5){
			$img=$_FILES['imagen']['tmp_name'];
			$s=$sha1."_".$img;
			$destino="img_test/".$sha1."_".$_FILES['imagen']['name'];
			copy($img, $destino);
			move_uploaded_file($img, $destino);
			$titulo=@mysql_query("INSERT INTO titulos (id_preg,tit,imga)VALUES('".$sha1."','".$tit."','".$destino."')")or die(mysql_error());
			echo "<span id='error'>Cuestionario creado correctamente!!!<br>Camparte para conocer las respuestas a tus preguntas!!!</span><br><br><br><br><br><input type='button' value='Compartir' id='sub'>";
		}
	}
	mysql_close($entra);
?>