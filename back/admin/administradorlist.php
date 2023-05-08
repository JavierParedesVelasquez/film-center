<?php
require_once("conexion.php");
$sql = "SELECT * FROM usuario";
$resultado = $cnx->query($sql);
while ($reg = $resultado->fetchObject()){
	echo "  <tr> 
 			 	<td>$reg->idusuario</td>
 			 	<td>$reg->nombres</td>
 			 	<td>$reg->usuario</td>
 			 	<td>$reg->clave</td>
 			 	<td> 
 			 	 	<a class='btn btn-primary' href='eliminar-admin.php?id=$reg->idusuario'>Eliminar</a> 
 					
 					<button class='btn btn-secondary' href='#' data-toggle='modal' data-target='#exampleModal' onclick='abrirModal($reg->idusuario)'>Editar</button> 
 			 	</td>
	 	 	</tr>";
}
?>