<?php
require_once("../conexion.php");
//validacion de envio mediante el metodo post
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: ../', true, 302);
}
//recuperamos la informacion del formulario
$peliculaId = $_POST['pelicula_id'];
$clienteId = $_POST['cliente_id'];
$precio = $_POST['precio'];
$asientos = $_POST['asientos'];

//date es una funcion interna de php que vendria a indicar la fecha, lo primero que te pide cuando llamas esta funcion es que le des un formato, es el formato en ese orden si no lo podemos asi no correra la base de datos
//SENTENCIA SQL PARA insertar datos pago, lo unico que necesitamos son las variables
$sql = "INSERT INTO pago (cliente_id, pelicula_id, asientos, fecha, precio)
 		 VALUES (
 		         $clienteId,
 		         $peliculaId,
 		         $asientos,
 		         '" . date('Y-m-d H:i:s') . "',
 		          '$precio')";
print $sql;
//EJECUTAR LA SENTENCIA
try {
    $cnx->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
    $query = $cnx->prepare($sql);
    $query->execute();
    $ventaId = $cnx->lastInsertId();

    if($ventaId > 0) {
    	//va ser una redireccion porque ahi vamos a imprimir nuestro comprobante de nuestra boleta, nosotros le tenemos que mandar el valor o el identificador del pago que en este caso se llama con el venta iD con que fin , con el fin de hacer la consulta del pago y poder crear el pdf de pago
    	//lo primero que hacemos es obtener el id del url, esto es el identificador de pago
    	//se hace una consulta anidada
        header('Location: voucher.php?voucherId=' . $ventaId, true, 302);
    }

} catch (Exception $exception) {
    print($exception->getMessage());
}

?>




