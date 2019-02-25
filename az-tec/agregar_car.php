<?php     
$coneccion=@mysql_connect('localhost','root','');
$conecta=@mysql_select_db('prueva',$coneccion);
$ip=$_SERVER['REMOTE_ADDR']; 
$pz=$_POST['pz'];   
$id_ar=$_POST['id_ar'];
	 //identificar si hay carrito
	$veri=@mysql_query("SELECT * FROM tmp WHERE ip='".$ip."'");    
	$hay=@mysql_num_rows($veri);
	//si existie
		$arti=@mysql_query("SELECT * FROM prueva1 WHERE id_ar='".$id_ar."'");
		$datos=@mysql_fetch_array($arti);
			$titulo=$datos['Titulo'];
			$id_c=rand(0000000000,999999999);
			$id_co=md5($id_c);
			$precio=$datos['precio'];
		$agrega_nuevo=@mysql_query("INSERT INTO tmp(Titulo,Pz,Precio,id_ar,id_co,ip)VALUES('".$titulo."','".$pz."','".$precio."','".$id_ar."','".$id_co."','".$ip."')");
		echo 'ok';
?>