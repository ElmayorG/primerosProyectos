<?php
require('conex.php');
	$id=$_GET['id'];
	$a=@mysql_query("SELECT * FROM titulos WHERE id_preg='".$id."'");
	$imagen=@mysql_fetch_array($a);
$original=$imagen['imga'];
$boton="compartit.jpg";

for($i=strlen($original)-1;$i>0;$i--){
    if (substr($original,$i,1)=="."){
            $tipo=substr($original,$i+1);
            break;
    }
} 

/* insertamos el Header correspondiente al cualquiera de los tipos de imagen
   utilizables por PHP. Por ejemplo: jpeg */
   Header("Content-type:image/jpeg");
/* el uso de switch puede sernos útil para elegir la función adecuada */
switch($tipo){
    case "jpg":
          $copia=imagecreatefromjpeg($original);
          $sig=imagecreatefromjpeg($boton);
          imagecopy($copia, $sig, 100, 100, 0, 0, 150, 50);
    break;
    case "png":
          $copia=imagecreatefrompng($original);

    break;
    case "gif":
          $copia=imagecreatefromgif($original);
    break;
 }
 /* visualizamos la imagen ateniendonos al formato establecido en Header */
   imagejpeg($copia);
   /* eliminamos la imagen de memoria  */
ImageDestroy();
?>