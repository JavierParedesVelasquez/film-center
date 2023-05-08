<?php
require_once("conexion.php");

//EL QUE VA RECIBIR LOS DATOS

//AQUI ESTAMOS RECIBIENDO LOS NOMBRES LOS DATOS DE LA TABLA 
//EL NAME DE EL FORMULARIO TIENEN QUE SER IGUALES AL ['ESTO']

$txtnombres = $_POST['nombres'];
$txtusuario = $_POST['usuario'];
$txtclave = md5($_POST['clave']);
$bandera =0;

//SENTENCIA SQL PARA insertar datos
//CON ESTO TENGO LA CADENA SQL QUE VOY A TRABAJAR
$sql = "INSERT INTO usuario (nombres, usuario, clave)
 		 VALUES ('$txtnombres','$txtusuario','$txtclave')";

//EJECUTAR LA SENTENCIA
$cnx->query($sql) or die (0);
$bandera=1;
echo $bandera;

?>
