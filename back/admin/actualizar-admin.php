<?php
require_once("conexion.php");
$idusuario= $_GET['idusuario'];
$sql = "SELECT * FROM usuario WHERE idusuario=$idusuario";
$resultado = $cnx->query($sql);
$reg = $resultado->fetchObject();

$data['idusuario']=$reg->idusuario;
$data['nombres']=$reg->nombres;
$data['usuario']=$reg->usuario;
$data['clave']=$reg->clave;

//FORMATO JEYSON: MANDA LOS DATOS DE TODAS LAS COLUMNAS DE LA BB
echo json_encode($data);
?>
