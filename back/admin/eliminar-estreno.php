<?php

require_once("conexion.php");

$id_pelicula = $_GET['id'];

//SENTENCIA SQL QUE SIRVE PARA ELIMINAR
$sql = "DELETE FROM estrenos WHERE id_pelicula = $id_pelicula";

$cnx->query($sql) or die ("error");

header("location: tables4.php");

?>	