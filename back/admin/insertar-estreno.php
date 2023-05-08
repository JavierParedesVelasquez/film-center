<?php
require_once("conexion.php");

//EL QUE VA RECIBIR LOS DATOS

//AQUI ESTAMOS RECIBIENDO LOS NOMBRES LOS DATOS DE LA TABLA 
//EL NAME DE EL FORMULARIO TIENEN QUE SER IGUALES AL ['ESTO']

$txtpelicula = $_POST['nombre_pelicula'];
$txtcategoria = $_POST['categoria'];
$txttiempo = $_POST['tiempo'];
$txtdescripcion = $_POST['descripcion'];
$txtimagen = $_POST['imagen'];
$txturl = $_POST['url_video'];
$txtidioma = $_POST['idioma'];
$txtdisponible = $_POST['disponible'];
$txtcalificacion = $_POST['calificacion'];
$txtactivo = $_POST['activo'];
$bandera =0;

//SENTENCIA SQL PARA insertar datos
//CON ESTO TENGO LA CADENA SQL QUE VOY A TRABAJAR
$sql = "INSERT INTO estrenos (nombre_pelicula,categoria,tiempo,descripcion,imagen,url_video,idioma,disponible,calificacion,activo)
 		 VALUES (
 		 '$txtpelicula',
 		 '$txtcategoria',
 		 '$txttiempo',
 		 '$txtdescripcion',
 		 '$txtimagen',
 		 '$txturl',
 		 '$txtidioma',
 		 '$txtdisponible',
 		 '$txtcalificacion',
 		 '$txtactivo')";

//EJECUTAR LA SENTENCIA
$cnx->query($sql) or die (0);
$bandera=1;
echo $bandera;

?>
