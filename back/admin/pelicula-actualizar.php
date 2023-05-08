<?php

require_once("conexion.php");

$id_pelicula=$_POST['id_pelicula'];
$txtpelicula = $_POST['nombre_pelicula'];
$txtcategoria = $_POST['categoria'];
$txttiempo = $_POST['tiempo'];
$txtdescripcion=$_POST['descripcion'];
$txtimagen = $_POST['imagen'];
$txturl = $_POST['url_video'];
$txtprecio = $_POST['precio'];
$txtidioma=$_POST['idioma'];
$txtdisponible = $_POST['disponible'];
$txtcalificacion = $_POST['calificacion'];
$txtactivo = $_POST['activo'];
$bandera =0;


$sql = "UPDATE pelicula SET  
nombre_pelicula='$txtpelicula',
categoria='$txtcategoria',
tiempo='$txttiempo',
descripcion='$txtdescripcion',
imagen='$txtimagen',
url_video='$txturl',
precio='$txtprecio',
idioma='$txtidioma',
disponible='$txtdisponible',
calificacion='$txtcalificacion',
activo='$txtactivo'

WHERE id_pelicula=$id_pelicula";

 
//EJECUTAR LA SENTENCIA

$cnx->query($sql) or die (0);

$bandera=1;
echo $bandera;



?>