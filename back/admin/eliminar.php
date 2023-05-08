<?php

require_once("conexion.php");

$idcliente = $_GET['id'];

//SENTENCIA SQL QUE SIRVE PARA ELIMINAR
$sql = "DELETE FROM cliente WHERE cod_usuario = $idcliente";
$cnx->query($sql) or die ("error");
header("location: tables.php");

?>	