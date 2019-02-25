<?php
	require('conex.php');
	$id=$_GET['id'];
		$bus=@mysql_query("SELECT * FROM respu WHERE id_preg='".$id."' ORDER BY num_preg ASC, id_resp ASC");
		$pre=@mysql_query("SELECT * FROM preguntas WHERE id_preg='".$id."' ORDER BY num_preg ASC");
		$n=@mysql_num_rows($pre);
		$us=@mysql_num_rows($bus)
?>
	<table width="100%" border="1">
<?php		
		while($preg=@mysql_fetch_array($pre)){
			if($preg['num_preg'] == 0){
				echo "<tr><td>".$preg['preg']."</td>";
			}elseif($preg['num_preg'] > 0 && $preg['num_preg'] < ($n - 1)){
				echo "<td>".$preg['preg']."</td>";
			}elseif($preg['num_preg'] == ($n - 1)){
				echo "<td>".$preg['preg']."</td></tr>";
			}
		}
		inicio:
		$a = 0;
		while($respu=@mysql_fetch_array($bus)){
			if($respu['num_preg'] == 0){
				if($respu['tip'] == 1|| $respu['tip'] == 2){
						echo "<tr><td>".htmlentities($respu['resp'])."</td>";
						$u=$respu['id_resp'];
				}elseif($respu['tip'] == 3){
						echo "<tr><td><center><img src='".$respu['resp']."' width='100px' height='100'></center></td>";
						$a++;
				}
					$bus2=@mysql_query("SELECT * FROM respu WHERE id_preg='".$id."' AND id_resp='".$u."' ORDER BY num_preg ASC");
		while($respu=@mysql_fetch_array($bus2)){
			if($respu['num_preg'] > 0 && $respu['num_preg'] < ($n - 1)){
				if($respu['tip'] == 1|| $respu['tip'] == 2){
						echo "<td>".htmlentities($respu['resp'])."</td>";
						$a++;
				}elseif($respu['tip'] == 3){
						echo "<td><center><img src='".$respu['resp']."' width='100px' height='100'></center></td>";
						$a++;
				}
			}elseif($respu['num_preg'] == ($n - 1)){
				if($respu['tip'] == 1|| $respu['tip'] == 2){
						echo "<td>".htmlentities($respu['resp'])."</td></tr>";
						$a++;
				}elseif($respu['tip'] == 3){
						echo "<td><center><img src='".$respu['resp']."' width='100px' height='100'></center></td></tr>";
						$a++;
				}
			}
		}
	}
}
		
			/*}elseif($respu['num_preg'] > 0 && $respu['num_preg'] < ($n - 1)){
				if($respu['tip'] == 1|| $respu['tip'] == 2){
						echo "<td>".$respu['resp']."</td>";
				}elseif($respu['tip'] == 3){
						echo "<td><center><img src='".$respu['resp']."' width='100px' height='100'></center></td>";
				}
			}elseif($respu['num_preg'] == ($n - 1)){
				if($respu['tip'] == 1|| $respu['tip'] == 2){
						echo "<td>".$respu['resp']."</td></tr>";
				}elseif($respu['tip'] == 3){
						echo "<td><center><img src='".$respu['resp']."' width='100px' height='100'></center></td></tr>";
				}
			}
		}
		;*/
		dos:
		;
?>
	</table>