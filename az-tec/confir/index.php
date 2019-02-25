<?php
	require('cone.php');
	$val = $_GET['val'];
	$bus =@mysql_query("SELECT * FROM confir_num_ser WHERE valid_conf='".$val."'")or die(mysql_error());
	$bu1 =@mysql_query("SELECT * FROM num_ser_valid WHERE num_ser='".$val."'");
		$n=@mysql_num_rows($bus);
		if($n == 1){
			echo'<title>error1</title>';
		}else{
			$ve=@mysql_num_rows($bu1);
				if($ve == 1){
					$accion=@mysql_query("INSERT INTO confir_num_ser(valid_conf)VALUES(".$val.")");
				}else{
					echo "<title>error2</title>";
				}
		}
?>