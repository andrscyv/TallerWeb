<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Ejercicio 1</h1>
<p>
	Escribe en el text y creara un archivo en Pagina/Info con el texto
</p>
<form action="phpEx1.php" method="post">
	<input type="text" name="t1">
	<input type="submit" name="sub">
</form>
<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$entrada = $_POST["t1"] or die("no pudo hacer archivo");
	$file = fopen("../info/ex1.txt", "w");
	fwrite($file, $entrada);
	fclose($file);

}
phpinfo();
 ?>
</body>
</html>