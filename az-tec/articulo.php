<script src="jquery.js"></script>
<script src="scrip.js"></script>
<?php
	$coneccion=@mysql_connect('localhost','root','');
	$conecta=@mysql_select_db('prueva',$coneccion);
		//consigue
		$id_ar=$_GET['id'];
		$dat=@mysql_query("SELECT * FROM prueva1 WHERE id_ar= '".$id_ar."'");
		$datos=@mysql_fetch_array($dat);
		echo "<div>".$datos['Titulo']."</div>";
		echo "<div>".$datos['precio']."</div>";
		echo '<input type="hidden" value="'.$datos['id_ar'].'" id="art">';
?>
		<input type="number" value="1" name="pz" id="pz" min="1" max="1000">
		<input type="submit" value="Agregar" href="javascript:;" onclick="agreg($('#art').val(),$('#pz').val()); return false;">
		<div id="agregado"></div>