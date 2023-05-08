<?php
require_once("conexion.php");
$sql = "SELECT * FROM cliente";
$resultado = $cnx->query($sql);
while ($reg = $resultado->fetchObject()){
	echo "  <tr> 
 			 	<td>$reg->cod_usuario</td>
 			 	<td>$reg->nombres</td>
 			 	<td>$reg->apellidos</td>
 			 	<td>$reg->dni</td>
 			 	<td>$reg->telefono</td>
 			 	<td>$reg->direccion</td>
 			 	<td>$reg->passwor_cliente</td>
 			 	<td> 
 			 	 <a class='btn btn-primary' href='eliminar.php?id=$reg->cod_usuario'>Eliminar</a> 

 				 <button class='btn btn-secondary' href='' data-toggle='modal' data-target='#exampleModal' onclick='abrirModal($reg->cod_usuario)'>Editar</button> 
 			 	</td>
	 	 	</tr>";
}
?>