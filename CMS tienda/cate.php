<?php
	$categ = $_POST['tipo'];
	$categor = array(
			'a' => 'Monografia', 
			'b' => 'Esquemas',
			'c' => 'Arte',
			'd' => 'Papel',
			'e' => 'Adhesivos',
			'f' => 'Escolar',
			'g' => 'Didacticos',
			'h' => 'Envolturas',
			'i' => 'Manualidades',
			'j' => 'Maquetas',
			'k' => 'Dulceria',
			'l' => 'Merceria'
			);
	$conecta = new mysqli('localhost','root','','andrea');
	$busca = 'SELECT * FROM productos WHERE cat="'.$categor[$categ].'"';
	$ejecuta = $conecta -> query($busca);	
?>
<center><table width="500px;">
<tr>
	<td><code>Imagen</code></td>
	<td><code>Nombre</code></td>
	<td><code>Precio</code></td>
	<td></td>
</tr>
<?php
	$a = 0;
while ($datos = $ejecuta -> fetch_array(MYSQL_ASSOC)){
?>
	<tr>
		<td><img src="<?php echo $datos['foto'];?>" width="70px" height="70px"></td>
		<td><code><?php echo $datos['nombre'];?></code></td>
		<td><code><?php echo $datos['precio'];?></code></td>
		<td><input type="button" value="Agregar a lista" id="caja_elim" class="b_<?php echo $a;?>" onclick="agrega('<?php echo $datos['id_p'];?>');"></td>
	</tr>

<?php		
	$a++;	
}
?>
</table></center>