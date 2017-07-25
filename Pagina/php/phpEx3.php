<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/phpEx3.css">
</head>
<body>
<h1>Ejercicio 3</h1>
<h2>Archivos guardados en el servidor: </h2>
<?php 
	$dirBase = "../archivosUsuario/";
	$directorios = array('pdf','jpg','m4a','docx');

	foreach ($directorios as $ndir) {
		$dirActual = $dirBase.$ndir;
		$files = glob($dirActual."/*.{".$ndir.",".strtoupper($ndir)."}",GLOB_BRACE);
		echo "<div> $ndir <br>";
		foreach ($files as $file) {
			switch ($ndir) {
				case 'pdf':
					echo "<iframe src='$file'></iframe>";
					# code...
					break;
				case 'jpg':
					echo "<img src='$file'>";
					break;
				case 'm4a':
					echo "<audio controls><source src='$file' type ='audio/x-m4a'></audio>";
					break;
				case 'docx':
					echo "<p>".basename($file)."</p>";
					break;
				
				default:
					# code...
					break;
			}
			# code...
		}
		echo "</div>\n";
		
	}

 ?>

</body>
</html>