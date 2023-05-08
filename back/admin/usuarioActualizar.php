<?php

require_once("conexion.php");

$idusuario=$_POST['idusuario'];
$txtnombres = $_POST['nombres'];
$txtusuario = $_POST['usuario'];
$txtclave = $_POST['clave'];
$bandera =0;


$sql = "UPDATE usuario SET  
nombres='$txtnombres',
usuario='$txtusuario',
clave='$txtclave'

WHERE idusuario=$idusuario";

//EJECUTAR LA SENTENCIA

$cnx->query($sql) or die (0);

$bandera=1;
echo $bandera;



?>