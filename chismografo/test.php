<!DOCTYPE html>
<html>
<?php
	require('conex.php');
	$id=$_GET['id'];
	$selecciona=@mysql_query("SELECT * FROM preguntas WHERE id_preg='".$id."' ORDER BY num_preg DESC")or die("Hubo un error".mysql_error());
	$numera=@mysql_num_rows($selecciona);
	$t=@mysql_query("SELECT * FROM titulos WHERE id_preg='".$id."'");
	$tat=@mysql_fetch_array($t);
?>
	<head>
	<meta property="og:title" content="<?php echo $tat['tit'];?>"/>
	<meta property="fb:app_id" content="1513719825559188" /> 
  	<meta property="og:type"   content="website" /> 
	<meta property="og:description" content="Conoce a quien le gustas!!! haz tu propio test y mira, los resultados pueden sorprenderte!!"/>
	<meta property="og:image" content="imagen.php?id=<?php echo $id;?>">
	<title>Conoce que piensan tus compa&ntilde;eros - El resultado es sorprendente!</title>
	<script src="jquery.js"></script>
	<script src="ja.js"></script>
	<style type="text/css">
		#top_bar{
			position: absolute;
			margin: 0px;
			padding: 0px;
			top: 0px;
			left: 0px;
			background: #1CD2FF;
			box-shadow: 5px 5px 10px #ffffff inset;
			width: 100%;
			height: 80px;
			text-align: center;
			font-size: 30px;
			font-family: "Candara";
		}
		#top_bar > div{
			padding: 25px;
			margin: 3px;
			color: #ffffff;
			font-weight: bold;
			text-shadow:0px 0px 3px #1ABBE3;
			 letter-spacing: .2em;
		}
		#form{
			position: relative;
			top: 85px;
		}
		#resp{
			position: relative;
			top:100px;
		}
		#sub{
			border: 2px solid;
			padding: 10px;
			background: #1CD2FF;
			color: #ffffff;
			letter-spacing: .1em;
			border-bottom-right-radius: 1em;
			font-style: 15px;
			cursor: pointer;
		}
		#sub:hover{
			background: #1694B4;
		}
		.a{
			width: 230px;
			font-size: 15px;
			padding: 10px;
			letter-spacing: 2px;
		}
		.d{
			width: 350px;
			height: 250px;
			font-size: 15px;
			padding: 10px;
			letter-spacing: 2px;	
		}
		.b{
			width: 255px;
			padding: 10px;
			letter-spacing:2px;
			font-size: 15px;
			cursor: pointer;
		}
		.list{
			list-style: none;	
		}
		.list > li{
			margin: 10px;
		}
		.tit{
			width: 350px;
			letter-spacing: 2px;
			font-size: 20px;
			font-family: "Candara";
		}
		#error{
			width: 250px;
			height: 100px;
			font-size: 15px;
			font-family: "Candara";
			background: #FF7171;
			border: 4px solid #FF0101;
			letter-spacing: 2px;
		}
		#pregu{
			font-family: "Candara";
			font-size: 15px;
			letter-spacing: 1px;
		}
		#num{
			letter-spacing: 2px;
			font-family: "Arial";
			font-size: 15px;
		}
		.desc{
			font-size: 13px;
			letter-spacing: 2px;
			font-family: "Candara";
			width: 340px;
			height: 200px;
		}
		#titl{
			font-size: 25px;
			letter-spacing: 2px;
			font-family: "Candara";
			color: #F4F4F4;
		}
		#ir{
			letter-spacing: .1em;
			font-size: 20px;
			float: right;
			margin: 2px;
			position: absolute;
			text-decoration: none;
			font-family: "Candara";
			color: #fff;
			top: 50px;
			left: 85%;
		}
		#des{
			letter-spacing: .1em;
			font-family: "Arial";
			color: #D1E6DE;
		}
		#respu{
			top: 85px;
			position: relative;
		}
		.no{
			display: none;
		}
		.si{
			display: block;
			background: #C2C2C2;
			width: 400px;
			position: absolute;
			left: 35%;
			border: 1px solid #fff;
			-webkit-border-radius:5px;
			border-radius:5px;
		}
		.error{
			background: #FF5A5A;
			border:1px solid #FF1313;
			-webkit-border-radius:5px;
		}
		</style>
		<script>
			function sig(n){
				var sig = n + 1;
					if($("#chs"+ n +" > .d").val()==""){
						$("#chs"+ n +" > .d").addClass("error");
					}else{
						$("#chs"+ n +" > .d").removeClass("error");
						$("#chs"+ n +"").removeClass('si');
						$("#chs"+ n +"").addClass('no');
						$("#chs"+ sig +"").addClass('si');
					}
			}
		</script>
	</head>
	<body>
	<div id="top_bar"><div> <?php echo $tat['tit'];?></div><a href="index.php" id="ir">Crear chismografo</a></div>
	<div id="respu">
	<form onsubmit="responde(); return false;" id="formul">
<?php
while($encontro=@mysql_fetch_array($selecciona)){
	if($encontro['num_preg']==0){
	switch ($encontro['tip']) {
					case 1:
?>
<center><div id="chs<?php echo $encontro['num_preg'];?>" class="si"><label id="titl"><?php echo $encontro['preg']; ?></label><br>
<small id="des"><?php echo $encontro['descri'];?></small><br>
<textarea name="resp[]" class="d" placeholder="Respuesta">
</textarea><br>
<input type="hidden" value="<?php echo $encontro['tip'];?>" name="tip[]">
<input type="hidden" value="<?php echo $encontro['num_preg'];?>" name="num_p[]">
<input type="hidden" value="<?php echo $id;?>" name="id_preg[]">
<br>
<input type="button" value="Continuar" id="sub" onclick="sig(<?php echo $encontro['num_preg']; ?>);"><br>
</div>
</center>
<?php
					break;
					case 2:
?>
<center><div id="chs<?php echo $encontro['num_preg'];?>" class="si"><label id="titl"><?php echo $encontro['preg']; ?></label><br>
<small id="des"><?php echo $encontro['descri'];?></small><br>
<select class="a" name="resp[]">
	<option value="si">Si</option>
	<option value="no">no</option>
</select><br><br>
<input type="hidden" value="<?php echo $encontro['tip'];?>" name="tip[]">
<input type="hidden" value="<?php echo $encontro['num_preg'];?>" name="num_p[]">
<input type="hidden" value="<?php echo $id;?>" name="id_preg[]">
	</div>
<input type="button" value="Continuar" id="sub" onclick="sig(<?php echo $encontro['num_preg']; ?>);"><br>
</center>
<?php
					break;
					case 3:
?>
<center>
	<div id="chs<?php echo $encontro['num_preg'];?>" class="si"><label id="titl"><?php echo $encontro['preg']; ?></label><br>
<small id="des"><?php echo $encontro['descri'];?></small><br>
<input type="file" name="file[]" id="file" accept="image/*" class="d"><br><br>
<input type="hidden" value="<?php echo $encontro['tip'];?>" name="tip[]">
<input type="hidden" value="<?php echo $encontro['num_preg'];?>" name="num_p[]">
<input type="hidden" value="<?php echo $id;?>" name="id_preg[]">
<input type="button" value="Continuar" id="sub" onclick="sig(<?php echo $encontro['num_preg']; ?>);"><br>
<br>
	</div>
</center>
<?php	
					break;
				}
			}elseif($encontro['num_preg'] > 0 && $encontro['num_preg'] < ($numera-1)){
					switch ($encontro['tip']){
					case 1:
?>
<center><div id="chs<?php echo $encontro['num_preg'];?>" class="no"><label id="titl"><?php echo $encontro['preg']; ?></label><br>
<small id="des"><?php echo $encontro['descri'];?></small><br>
<textarea name="resp[]" class="d" placeholder="Respuesta">
</textarea><br><br>
<input type="hidden" value="<?php echo $encontro['tip'];?>" name="tip[]">
<input type="hidden" value="<?php echo $encontro['num_preg'];?>" name="num_p[]">
<input type="hidden" value="<?php echo $id;?>" name="id_preg[]">
<input type="button" value="Continuar" id="sub" onclick="sig(<?php echo $encontro['num_preg']; ?>);"><br>
</div>
</center>
<?php
					break;
					case 2:
?>
<center><div id="chs<?php echo $encontro['num_preg'];?>" class="no"><label id="titl"><?php echo $encontro['preg']; ?></label><br>
<small id="des"><?php echo $encontro['descri'];?></small><br>
<select class="a" name="resp[]">
	<option value="si">Si</option>
	<option value="no">no</option>
</select><br><br>
<input type="hidden" value="<?php echo $encontro['tip'];?>" name="tip[]">
<input type="hidden" value="<?php echo $encontro['num_preg'];?>" name="num_p[]">
<input type="hidden" value="<?php echo $id;?>" name="id_preg[]">
<input type="button" value="Continuar" id="sub" onclick="sig(<?php echo $encontro['num_preg']; ?>);"><br>
	</div>
</center>
<?php
					break;
					case 3:
?>
<center>
	<div id="chs<?php echo $encontro['num_preg'];?>" class="no"><label id="titl"><?php echo $encontro['preg']; ?></label><br>
<small id="des"><?php echo $encontro['descri'];?></small><br>
<input type="file" name="file[]" id="file" accept="image/*" class="d"><br><br>
<br><input type="hidden" value="<?php echo $encontro['tip'];?>" name="tip[]">
<input type="hidden" value="<?php echo $encontro['num_preg'];?>" name="num_p[]">
<input type="hidden" value="<?php echo $id;?>" name="id_preg[]">
<input type="button" value="Continuar" id="sub" onclick="sig(<?php echo $encontro['num_preg']; ?>);"><br>
	</div>
</center>
<?php
			break;
			}
		//final de else
		}else if($encontro['num_preg'] == ($numera - 1)){
					switch ($encontro['tip']){
					case 1:
?>
<center><div id="chs<?php echo $encontro['num_preg'];?>" class="no"><label id="titl"><?php echo $encontro['preg']; ?></label><br>
<small id="des"><?php echo $encontro['descri'];?></small><br>
<textarea name="resp[]" class="d" placeholder="Respuesta">
</textarea><br><br><input type="hidden" value="<?php echo $encontro['tip'];?>" name="tip[]">
<input type="hidden" value="<?php echo $encontro['num_preg'];?>" name="num_p[]">
<input type="hidden" value="<?php echo $id;?>" name="id_preg[]">
<input type="hidden" value="<?php echo $id;?>" name="ide">
<input type="submit" value="Terminar" id="sub" onclick="sig();"><br>
</div>
</center>
<?php
					break;
					case 2:
?>
<center><div id="chs<?php echo $encontro['num_preg'];?>" class="no"><label id="titl"><?php echo $encontro['preg']; ?></label><br>
<small id="des"><?php echo $encontro['descri'];?></small><br>
<select class="a" name="resp[]">
	<option value="si">Si</option>
	<option value="no">no</option>
</select><br><br><input type="hidden" value="<?php echo $encontro['tip'];?>" name="tip[]">
<input type="hidden" value="<?php echo $encontro['num_preg'];?>" name="num_p[]">
<input type="hidden" value="<?php echo $id;?>" name="id_preg[]">
<input type="hidden" value="<?php echo $id;?>" name="ide">
<input type="submit" value="Terminar" id="sub" onclick="sig();"><br>
	</div>
</center>
<?php
					break;
					case 3:
?>
<center>
	<div id="chs<?php echo $encontro['num_preg'];?>" class="no"><label id="titl"><?php echo $encontro['preg']; ?></label><br>
<small id="des"><?php echo $encontro['descri'];?></small><br>
<input type="file" name="file[]" id="file" accept="image/*" class="d"><br>
<br><input type="hidden" value="<?php echo $encontro['tip'];?>" name="tip[]">
<input type="hidden" value="<?php echo $encontro['num_preg'];?>" name="num_p[]">
<input type="hidden" value="<?php echo $id;?>" name="id_preg[]">
<input type="hidden" value="<?php echo $id;?>" name="ide">
<input type="submit" value="Terminar" id="sub" onclick="sig();"><br>
	</div>
</center>
<?php
			break;
			}
		}
	}
			mysql_close($entra);
?>
</div>
</form>
</body>
</html>