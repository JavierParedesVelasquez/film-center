<?php
require_once("conexion.php");

//EL QUE VA RECIBIR LOS DATOS

//AQUI ESTAMOS RECIBIENDO LOS NOMBRES LOS DATOS DE LA TABLA 
//EL NAME DE EL FORMULARIO TIENEN QUE SER IGUALES AL ['ESTO']

$txtnombres = $_POST['nombres'];
$txtapellidos = $_POST['apellidos'];
$txtdni = $_POST['dni'];
$txttelefono = $_POST['telefono'];
$txtdireccion = $_POST['direccion'];
$txtpassword = md5($_POST['passwor_cliente']);
$bandera =0;

//SENTENCIA SQL PARA insertar datos
//CON ESTO TENGO LA CADENA SQL QUE VOY A TRABAJAR
$sql = "INSERT INTO cliente (nombres, apellidos, dni, telefono, direccion, passwor_cliente)
 		 VALUES ('$txtnombres','$txtapellidos','$txtdni','$txttelefono','$txtdireccion','$txtpassword')";

//EJECUTAR LA SENTENCIA
$cnx->query($sql) or die (0);
$bandera=1;
echo json_encode($bandera);

?>
