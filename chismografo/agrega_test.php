<?php
	$numero=$_POST['numero'];
	$tit=$_POST['tit'];
	$titulo=htmlentities($tit);
	$num=strlen($titulo);
	if($numero < 5){
		echo "Debes tener como minimo 5 preguntas";
	}else if($titulo==null){
		echo "<div id='error'>Debe tener un titulo su chismografo</div>";
	}else if($num < 8){
		echo "<div id='error'>El titulo debe de ser mas largo</div>";
	}else{
		setcookie("tit",$titulo,time()+600000,"/");
?>
	<form id="cuestionario_creacion" onsubmit="crear(); return false;" method="POST">
	<center><ol class="list">
	<div id="a"></div><br>
	<label id="pregu">Imagen:</label><input type="file" accept="image/*" id="u" onchange="carga();" name="imagen"><br>
<?php	
	for ($i=1; $i <= $numero ; $i++) { 
		echo "<li><input type='text' name='preg[]' id='pre' class='a' placeholder='Nombre de la pregunta ".$i."'><br>";
		echo "<select name='tip[]' size='1' id='tip' class='b'><option value='1'>Pregunta Libre</option><option value='2'>Si - No</option><option value='3'>Subir Imagen</option></select></li><li><textarea placeholder='Descripci&oacute;n de la pregunta ".$i."' class='desc' name='desc[]'></textarea></li>";
	}
?>
			</ol>
			<input type="submit" id="sub" value="Crear">
		</center>
	</form>
<?php
	}
?>