<?php

require_once("conexion.php");

$idcliente = $_GET['id'];

//SENTENCIA SQL QUE SIRVE PARA ELIMINAR
$sql = "DELETE FROM usuario WHERE idusuario = $idcliente";

$cnx->query($sql) or die ("error");

header("location: tables2.php");

?>	