<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/phpEx3v2.css">
</head>
<body>
<h1>Ejercicio 3 V2</h1>
<h2>Archivos guardados en el servidor: </h2>
<div class="res" id="res"></div>
<?php 
	$dirBase = "../archivosUsuario/";
	$directorios = array('pdf'=>'Pdf','jpg'=>'Imagen','m4a'=>'Audio','docx'=>'Documentos');
	echo "<ul>\n";
	foreach ($directorios as $ndir => $tipo) {
		$dirActual = $dirBase.$ndir;
		$files = glob($dirActual."/*.{".$ndir.",".strtoupper($ndir)."}",GLOB_BRACE);
		echo "<li class='btnTipo $tipo' >$tipo<div class='dropContent' id='$tipo'>\n";
		foreach ($files as $file) {
			echo "<div class='btnInterno $ndir' onclick='contenido(this)'>".basename($file,".".$ndir)."</div>\n";
		}
		echo "</div>\n";
		
	}
	echo "</ul>\n";

 ?>
 <script type="text/javascript" src="../js/phpEx3v2.js"></script>
</body>
</html>