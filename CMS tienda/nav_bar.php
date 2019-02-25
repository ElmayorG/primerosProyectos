<?php
	if(empty($_COOKIE{'idusu'})){
?>
	<div id="nav_bar">
		<img src="icon/top.png" width="100%;" height="10px">
		<center><img src="icon/nom.png" height="30px"></center>
		<img src="icon/bottom.png" width="100%;" height="10px">
	</div>
		<center><table id="part_a">
			<tr>
				<td>
					<a href="javascript:void(0);" id="link_a" onclick="carga('2');">Instcribirte al <br> bolet&iacute;n</a>
				</td>
				<td>
					<a href="javascript:void(0);" id="link_a" onclick="carga('c');">Mi lista <br> de compras</a>
				</td>
				<td>
					<a href="javascript:void(0);" id="link_a">Conocenos</a>
				</td>
				<td>
					<a href="javascript:void(0);" id="link_a" onclick="carga('4');">Entrar/<br>Registrar</a>
				</td>
				<td>
					<table>
						<tr>
							<td><code>Siguenos en:</code></td>
						</tr>
						<tr>
							<td><img src="img/icon/facebookicon.jpg" width="50px" height="50px"></td>
						</tr>
					</table>
				</td>
			</tr>
		</table></center>
<?php
	}elseif($_COOKIE['tipo'] == 'admin'){
?>
	
	<div id="nav_bar">
		<img src="icon/top.png" width="100%;" height="10px">
		<center><img src="icon/nom.png" height="30px"></center>
		<img src="icon/bottom.png" width="100%;" height="10px">
	</div>
		<center><table id="part_a">
			<tr>
				<td>
					<a href="salir.php" id="link_a">Salir</a>
				</td>
				<td>
					<a href="javascript:void(0);" id="link_a" onclick="carga('8');">Subir Producto</a>
				</td>
				<td>
					<a href="javascript:void(0);" id="link_a" onclick="carga('6');">Quitar producto</a>
				</td>
				<td>
					<a href="javascript:void(0);" id="link_a" onclick="carga('alta');">Dar de alta a<br> usuario</a>
				</td>
			</tr>
		</table></center>

<?php
	}elseif ($_COOKIE['tipo'] == 'norm') {
?>
	<div id="nav_bar">
		<img src="icon/top.png" width="100%;" height="10px">
		<center><img src="icon/nom.png" height="30px"></center>
		<img src="icon/bottom.png" width="100%;" height="10px">
	</div>
		<center><table id="part_a">
			<tr>
				<td>
					<a href="javascript:void(0);" id="link_a" onclick="carga('2');">Instcribirte al <br> bolet&iacute;n</a>
				</td>
				<td>
					<a href="javascript:void(0);" id="link_a" onclick="carga('c');">Mi lista <br> de compras</a>
				</td>
				<td>
					<a href="javascript:void(0);" id="link_a">Conocenos</a>
				</td>
				<td>
					<a href="salir.php" id="link_a">Salir</a>
				</td>
				<td>
					<table>
						<tr>
							<td><code>Siguenos en:</code></td>
						</tr>
						<tr>
							<td><img src="img/icon/facebookicon.jpg" width="50px" height="50px"></td>
						</tr>
					</table>
				</td>
			</tr>
		</table></center>

<?php
	}
?>