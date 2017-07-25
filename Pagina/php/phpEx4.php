<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 4</title>
</head>
<body>
<h1>Ejercicio 4: <i>Encripta y desencripta</i></h1>
<form action="phpEx4.php" method="GET">
	<input type="text" name="data">
	<input type="submit" name="boton">
</form>

<?php 
$ruta = "/Users/El_jefe/documents/tallerweb/ejercicioterminal/encriptador";
$python = "/Library/Frameworks/Python.framework/Versions/3.6/bin/python3.6";
if(isset($_GET['data'])){
	chdir($ruta);
	echo "Encriptado<br>";
	shell_exec("$python desencripta.py saludame.py cruz");
	echo "Desencriptado<br>";
	echo shell_exec("$python saludame.py ".$_GET['data'])."<br>";
	shell_exec("$python encripta.py saludame.py cruz");
	echo "Encriptado";
}
 ?>
</body>
</html>