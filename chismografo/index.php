<!DOCTYPE html>
	<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<meta name="description" content="Conoce a quien le gustas!!! haz tu propio test y mira, los resultados pueden sorprenderte!!">
	<meta name="Keywords" content="Chismografo, Grandios">
	<meta name="">
		<title>Chismografo</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="fb.js"></script>
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
		#error{
			font-family: "Candara";
			font-size: 35px;
			color: #B0B0B0;
			width: 100%;
			text-align: center;
			letter-spacing: .3em;
			position: relative;
			top: 100px;
			left: 0%;
		}
		</style>
		<script>
			function veri(){
				if($("#num").val() > 20){
					$("#num").val('20');
				}
			}
		</script>
		<script>
			function carga(){
				var es = $('#u').val();
				$('#a').html('<img src="file://'+ es +'" width="100" height="100">');
			}
		</script>
		<script src='ja.js'></script>
	</head>
	<body>
	<div id="top_bar"><div>Crear Chismografo</div></div>
	<div id="Cargas"><center><form id="form" onsubmit="ent($('#num').val(),$('#titulo').val()); return false;" method="POST">
			<input type="text" name="titulo" id="titulo" class="tit" placeholder="Titulo del chismografo"><br>
			<label id="pregu">Numero de preguntas*:</label><input max="20" min="5" type="text" id="num" onkeyup="veri();" name="numero" value="5" placeholder="Numero de preguntas"><br>
			<input type="submit" id="sub" value="Aceptar">
		</form></center>
	</div>
	<div id="resp"></div>
	</body>
	</html>