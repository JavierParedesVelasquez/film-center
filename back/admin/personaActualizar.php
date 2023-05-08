<?php

require_once("conexion.php");

$cod_usuario=$_POST['cod_usuario'];
$txtnombres = $_POST['nombres'];
$txtapellidos = $_POST['apellidos'];
$txtdni = $_POST['dni'];
$txttelefono = $_POST['telefono'];
$txtdireccion = $_POST['direccion'];
$txtpassword = $_POST['passwor_cliente'];
$bandera =0;


$sql = "UPDATE cliente SET  
nombres='$txtnombres',
apellidos='$txtapellidos',
dni='$txtdni',
telefono='$txttelefono',
direccion='$txtdireccion',
passwor_cliente='$txtpassword' 
WHERE cod_usuario=$cod_usuario";

//EJECUTAR LA SENTENCIA

$cnx->query($sql) or die (0);

$bandera=1;
echo $bandera;




?>