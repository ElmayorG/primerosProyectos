<?php
	$files = $_FILES['userfile']['name'];
	busca($files);
	function busca($files = array()){
		$i = 0;
		foreach ($files as $file) {
			$si_hay=$_FILES['userfile']['tmp_name'][$i];
			if($si_hay){
				if(move_uploaded_file($si_hay, "files/".$_FILES['userfile']['name'][$i])){
					echo "Se ha subido correctamente";
				}
			}
			$i++;
		}
	}
?>