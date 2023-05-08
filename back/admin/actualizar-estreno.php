<?php
require_once("conexion.php");
$id_pelicula= $_GET['id_pelicula'];
$sql = "SELECT * FROM estrenos WHERE id_pelicula=$id_pelicula";
$resultado = $cnx->query($sql);
$reg = $resultado->fetchObject();

$data['id_pelicula']=$reg->id_pelicula;
$data['nombre_pelicula']=$reg->nombre_pelicula;
$data['categoria']=$reg->categoria;
$data['tiempo']=$reg->tiempo;
$data['descripcion']=$reg->descripcion;
$data['imagen']=$reg->imagen;
$data['url_video']=$reg->url_video;
$data['idioma']=$reg->idioma;
$data['disponible']=$reg->disponible;
$data['calificacion']=$reg->calificacion;
$data['activo']=$reg->activo;

//FORMATO JEYSON: MANDA LOS DATOS DE TODAS LAS COLUMNAS DE LA BB
echo json_encode($data);
?>
