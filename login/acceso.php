<?php

require_once("conexion.php");

$u = $_POST['txtdni'];
$p = md5($_POST['txtclave']);


$sql = "SELECT * FROM cliente WHERE dni='$u' AND passwor_cliente='$p'";
$rs	= $cnx->query($sql) or die("error");


//roundCount CONTAR LOS REGISTROS
if ($rs->rowCount()==0) {
	# funcion de php header encabezado, location sirve para direccionar el navergador, para que se mueva a una pagina
	# te redigira a la pagina principal si esta incorrecto
	header("location: login.php");
}else{
	//INICIO DE SESION se inicia cuando los datos son correctos.
 	session_start();
 	// las variables de sesion son las que no se almacenan en la memoria del navegador sino se almacenan en la memoria del servidor y esas variables no se borran
 	$reg = $rs->fetchObject();
 	$_SESSION['cod_usuario'] = $reg->cod_usuario;
 	$_SESSION['nombres'] = $reg->nombres;
 	$_SESSION['apellidos'] = $reg->apellidos;
 	$_SESSION['dni'] = $reg->dni;
 	$_SESSION['telefono'] = $reg->telefono;
 	$_SESSION['direccion'] = $reg->direccion;
 	$_SESSION['passwor_cliente'] = $reg->clave;
 

	header("location: ../home/index.php");
}
?>	