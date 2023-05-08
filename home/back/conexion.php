<?php
//DECLARANDO VARIABLES
$servidor = "localhost";//Donde esta el servidor, en este caso esta en localhost
$basedatos = "filmcenter";//Nombre de la base de datos
$motor = "mysql";//Motor de la base de datos
$usuario ="root";//Usuario para la conexion mysql
$password ="";//Para poder ingresar al mysql con el usuario rut, en este caso cuando se instala el xamp su password es una cadena nula, entonces puedo abrir comillas y se vuelve nulo

//La cadena de conexion viene a ser una combinacion de los datos del servidor, los datos  de la base de datos y del motor de base de datos.
//se estaria utilizando todas las variables que hemos definido para la conexion a la base de datos.
$cadena ="$motor:host=$servidor;dbname=$basedatos";
//Aqui esta variable cnx ES UN OBJETO y lo vamos a instanciar usando el operador new y llamando a la clase PDO significa php data Object: esta clase sirve para que el codigo que nosotros programemos se pueda conectar a cualquier tipo de base de datos. 
$cnx =new PDO($cadena, $usuario, $password);
?>
