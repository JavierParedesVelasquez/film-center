<?php
require_once("conexion.php");
$sql = "SELECT * FROM pelicula";
$resultado = $cnx->query($sql);
while ($reg = $resultado->fetchObject()){
	echo "  <tr> 
 			 	<td>$reg->id_pelicula</td>
 			 	<td>$reg->nombre_pelicula</td>
 			 	<td>$reg->categoria</td>
 			 	<td>$reg->tiempo</td>
 			 	<td>$reg->url_video</td>
 			 	<td>$reg->precio</td>
 			 	<td>$reg->activo</td>
 			 	<td> 
 			 	 	<a class='btn btn-primary' href='eliminar-pelicula.php?id=$reg->id_pelicula'>Eliminar</a> 
 					
 					<button class='btn btn-secondary' href='#' data-toggle='modal' data-target='#exampleModal' onclick='abrirModal($reg->id_pelicula)'>Editar</button> 
 			 	</td>
	 	 	</tr>";
}
?>