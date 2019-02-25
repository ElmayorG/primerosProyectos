<center><table width="500px">
<tr>
	<td colspan="3">
		<big><code>TABLA DE PRODUCTOS</code></big>
	</td>
</tr>
<tr>
	<td><code>NOMBRE</code></td>
	<TD><code>PRECIO</code></TD>
	<td>
		<code>Acci&oacute;n</code>
	</td>
</tr>
<?php
	$conectar = new mysqli('localhost','root','','andrea');
	$busca = "SELECT * FROM productos";
	$ejecuta_script = $conectar -> query($busca);
	$id_tabla = 0;
	while ($datos = $ejecuta_script -> fetch_array(MYSQL_ASSOC)) {
?>
<tr id="tabla_<?php echo $id_tabla;?>">
	<td><code><?php echo $datos['nombre'];?></code></td>
	<td><code><?php echo $datos['precio'];?></code></td>
	<td>
		<input type="button" value="Eliminar" onclick="elimina('<?php echo $datos['id_p'];?>','<?php echo $id_tabla;?>');" id="caja_elim"> 
	</td>
</tr>
<?php
		$id_tabla++;
	}
?>
</table></center>