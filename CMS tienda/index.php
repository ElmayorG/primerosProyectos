<?php
	if(empty($_COOKIE['idusu'])){
		if(empty($_COOKIE['id_sesion'])){
			setcookie('id_sesion',rand(0000,9999));
		}
	}
?>
<html>
	<head>
		<title>PAPELERIA LILI</title>
		<style type="text/css">
			#link_cat{
				text-decoration: none;
				display: block;
				width: 100%;
				text-align:left;
				font-size:15px;
				font-family: "Arial";
				color: #000;	
				height: 21px;
				border-bottom: 1px solid #000;
				border-bottom-style: dotted;
			}
			#link_cat:hover{
				font-size: 16px;
				font-weight: bold;
				text-decoration: underline;
				color:#BF0000;
			}
			#caja_opciones{
				background: #E5E5E5;
				width: 15%;
			}
			#new_concept{
				width: 100%;
				top:110px;
				position: absolute;
			}
			#part_a{
				position: relative;
				top: 43px;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/nav_bar.css">
		<link rel="stylesheet" type="text/css" href="css/links.css">
		<link rel="stylesheet" type="text/css" href="css/cajas_tablas.css">
		<script src="js/jquery.js"></script>
		<script src="js/carga.js"></script>
	</head>
	<body>
	<?php
		include('nav_bar.php');
	?>
		<table id="new_concept">
			<tr>
				<td><big><code>Categor&iacute;a</code></big></td>
				<td width="85%" rowspan="5">
					<div id="caja_ini">
						<table width="100%">
							<tr>
<?php
	$conectar = new mysqli('localhost','root','','andrea');
	$genera = 'SELECT * FROM productos';
	$ejecuta = $conectar -> query($genera);
	$fila = 0;
	while ($datos = $ejecuta -> fetch_array(MYSQL_ASSOC)){
		if($fila < 8){
?>
		<td>
			<table>
				<tr>
					<td><center><img src="<?php echo $datos['foto'];?>" width="100px;" height="100px"></center></td>
				</tr>
				<tr>
					<td><big><code><?php echo $datos['nombre'];?></code></big></td>
				</tr>
				<tr>
					<td>
						<center><code><?php echo $datos['precio'];?></code></center>
					</td>
				</tr>
			</table>
		</td>
<?PHP
				$fila++;
		}else{
?>
	</tr>
	<tr>
	<td>
			<table>
				<tr>
					<td><center><img src="<?php echo $datos['foto'];?>" width="100px;" height="100px"></center></td>
				</tr>
				<tr>
					<td><big><code><?php echo $datos['nombre'];?></code></big></td>
				</tr>
				<tr>
					<td>
						<center><code><?php echo $datos['precio'];?></code></center>
					</td>
				</tr>
			</table>
		</td>
		
<?php
		$fila = 0;
		}
	}
?>
							</tr>
						</table>
					</div>
				</td>
			</tr>
			<tr id="caja_opciones">
				<td id="caja">
					<a href="javascript:void(0);" id="link_cat" onclick="aparece_cat('a');">Monograf&iacute;a</a>
					<a href="javascript:void(0);" id="link_cat" onclick="aparece_cat('b');">Esquemas</a>
					<a href="javascript:void(0);" id="link_cat" onclick="aparece_cat('c');">Arte</a>
					<a href="javascript:void(0);" id="link_cat" onclick="aparece_cat('d');">Papel</a>
					<a href="javascript:void(0);" id="link_cat" onclick="aparece_cat('e');">Adhesivos</a>
					<a href="javascript:void(0);" id="link_cat" onclick="aparece_cat('f');">Escolar</a>
					<a href="javascript:void(0);" id="link_cat" onclick="aparece_cat('g');">Didacticos</a>
					<a href="javascript:void(0);" id="link_cat" onclick="aparece_cat('h');">Envolturas</a>
					<a href="javascript:void(0);" id="link_cat" onclick="aparece_cat('i');">Manualidades</a>
					<a href="javascript:void(0);" id="link_cat" onclick="aparece_cat('j');">Maquetas</a>
					<a href="javascript:void(0);" id="link_cat" onclick="aparece_cat('k');">Dulcer&iacute;a</a>
					<a href="javascript:void(0);" id="link_cat" onclick="aparece_cat('l');">Mercer&iacute;a</a>
				</td>
			</tr>
			<tr>
				<td>
					<code>Marcas</code>
				</td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td>
					
					<div id="fb-root"></div>
						<script>(function(d, s, id) {
  						var js, fjs = d.getElementsByTagName(s)[0];
  						if (d.getElementById(id)) return;
 						 js = d.createElement(s); js.id = id;
 						 js.src = "//connect.facebook.net/es_MX/sdk.js#xfbml=1&version=v2.3&appId=1513719825559188";
  						fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));
						</script>
						<div class="fb-page" data-href="https://www.facebook.com/pages/Papeleria-LiLi/792783354168080" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/Papeleria-LiLi/792783354168080"><a href="https://www.facebook.com/pages/Papeleria-LiLi/792783354168080">Papeleria LiLi</a></blockquote></div></div>
				</td>	
			</tr>
		</table>
	</body>
</html>