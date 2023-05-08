<?php
require_once("conexion.php");

//EL QUE VA RECIBIR LOS DATOS

//AQUI ESTAMOS RECIBIENDO LOS NOMBRES LOS DATOS DE LA TABLA 
//EL NAME DE EL FORMULARIO TIENEN QUE SER IGUALES AL ['ESTO']
$cod_usuario = $_POST['cod_usuario'];
$txtnombres = $_POST['txtnombres'];
$txtapellidos = $_POST['txtapellidos'];
$txtdni = $_POST['txtdni'];
$txttelefono = $_POST['txttelefono'];
$txtdireccion = $_POST['txtdireccion'];
$txtpassword = md5($_POST['txtpassword']);


//SENTENCIA SQL PARA insertar datos
//CON ESTO TENGO LA CADENA SQL QUE VOY A TRABAJAR
$sql = "INSERT INTO cliente (nombres, apellidos, dni, telefono, direccion, passwor_cliente)
 		 VALUES ('$txtnombres','$txtapellidos','$txtdni','$txttelefono','$txtdireccion','$txtpassword')";

//EJECUTAR LA SENTENCIA
$cnx->query($sql) or die ("error");
header("location: login.php");

?>