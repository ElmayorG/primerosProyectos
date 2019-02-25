<?php
	require('conex.php');
	$tip=$_POST['tip'];
	$ide=$_POST['ide'];
	//$ide=$_GET['ide'];
	$url='http://chismografo.az-tec.com.mx/test/?id='.$ide;
	agregar($tip);

		function agregar($tip = array()){
			$i = 0;
			$a = 0;
			$b = 0;
			$en=rand(000,999);
			$id_resp=sha1($en);
			foreach ($tip as $tipo) {
				if($tip[$i] == 1||$tip[$i] == 2){
					$re=$_POST['resp'][$b];
					$respi=htmlentities($re);
					$meter=@mysql_query("INSERT INTO respu (id_preg,num_preg,tip,id_resp,resp)VALUES('".$_POST['id_preg'][$i]."','".$_POST['num_p'][$i]."','".$tip[$i]."','".$id_resp."','".$respi."')")or die('Error:'.mysql_error());
					$b++;
				}elseif($tip[$i] == 3){
					$ima=sha1(rand(000,999));
					$name=$_FILES['file']['tmp_name'][$a];
					$destino="img_resp/".$ima."_".$_FILES['file']['name'][$a];
					copy($name,$destino);
					$meter=@mysql_query("INSERT INTO respu (id_preg,num_preg,tip,id_resp,resp)VALUES('".$_POST['id_preg'][$i]."','".$_POST['num_p'][$i]."','".$tip[$i]."','".$id_resp."','".$destino."')");
					$a++;
				}
				$i++;
			}
		}
?>
<style type="text/css">
	#compartir_var{
		position: absolute;
		top: 85px;
		left: 35%;
		width: 400px;
		height: 400px;
	}
	#comparte{
		padding: 10px;
		letter-spacing: .2em;
		font-family: "Candara";
		color: #fff;
		background: #2e2e2e;
		width: 160px;
		text-align: center;
		cursor: pointer;
	}
</style>
<div id="fb-root"></div>
<script src="jquery.js"></script>
<script>
	$(document).ready(function(){
		$("#comparte").click(function(){
			window.open('http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($url) ?>','_blank','width=380, height=180');
			$("#compartir_var").load('resp.php?id=<?php echo $ide;?>');
		});
	});
</script>
<div id="compartir_var">
	<center><div id="comparte">Ver resultados</div></center>
</div>