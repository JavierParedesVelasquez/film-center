<?php
require_once("conexion.php");

$cod_usuario= $_GET['cod_usuario'];
$sql = "SELECT * FROM cliente WHERE cod_usuario=$cod_usuario";
$resultado = $cnx->query($sql);
$reg = $resultado->fetchObject();

$data['cod_usuario']=$reg->cod_usuario;
$data['nombres']=$reg->nombres;
$data['apellidos']=$reg->apellidos;
$data['dni']=$reg->dni;
$data['telefono']=$reg->telefono;
$data['direccion']=$reg->direccion;
$data['passwor_cliente']=$reg->passwor_cliente;
//FORMATO JEYSON: MANDA LOS DATOS DE TODAS LAS COLUMNAS DE LA BB
echo json_encode($data);
?>