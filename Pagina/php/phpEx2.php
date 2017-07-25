<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
$dir = "../archivosUsuario/";
$pagOrig = "../html/phpEx2.html";
$tiposOK = array('application/pdf','image/jpeg','audio/mpeg','application/vnd.openxmlformats-officedocument.wordprocessingml.document','application/msword', 'audio/x-m4a','video/mp4');
$err = false;
$botonRegreso ="<a href ={$pagOrig}>Aqui</a>";

if (isset($_FILES["fileToUpload"]) and $_FILES["fileToUpload"]['error'] == 0){
	$file = $_FILES["fileToUpload"];
	$tipo = $file['type'];
	if(in_array($tipo, $tiposOK)){

		$path = $file['name'];
		$ext = pathinfo($path, PATHINFO_EXTENSION);
		$dir = $dir.$ext."/";
		if(!move_uploaded_file($file['tmp_name'],$dir.basename($file['name']))){
			$msg_err = "Error al mover el archivo. Vuelva a intentarlo ";
			$err = true;


		}
		else{
			$msg_err ="Se subio el archivo exitosamente.";
		}

	}
	else{
		$msg_err = "No es el tipo aceptado: ".$file['type'];
		$err = true;
	}
	
} else {
	$msg_err = "Error al subir archivo";
	$err = true;
}
if($err){
	$msg_err = $msg_err.$botonRegreso;
}
echo $msg_err;

 ?>
</body>
</html>