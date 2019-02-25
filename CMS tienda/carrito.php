<center><table width="350px">
<?php
	$conecta = new mysqli('localhost','root','','andrea');
	if (empty($_COOKIE['idusu'])) {
		$id = $_COOKIE['id_sesion'];
	}else{
		$id = $_COOKIE['idusu'];
	}

		$total = 0;

	$busca = 'SELECT * FROM carrito WHERE id_sesion="'.$id.'"';
	$ejecuta = $conecta -> query($busca);
	while($datos = $ejecuta -> fetch_array(MYSQL_ASSOC)){
		$busca1 = 'SELECT * FROM productos WHERE id_p="'.$datos['id_prod'].'"';
		$ejecuta2 = $conecta -> query($busca1);
		$datos2 = $ejecuta2 -> fetch_array(MYSQL_ASSOC);
?>
	<tr>
		<td>
			<img src="<?php echo $datos2['foto'];?>" width="50px" height="50px">
		</td>
		<td>
			<code><?php echo $datos2['nombre']?></code>
		</td>
		<td>
			<code><?php echo $datos2['precio'];?></code>
		</td>
	</tr>
<?php
		$total = $datos['precio'] + $total;
	}
?>
<tr>
	<td colspan="2">
		<code>Total a pagar</code>
	</td>
	<td>
		<code><?php echo $total;?></code>
	</td>
</tr>
</table></center>