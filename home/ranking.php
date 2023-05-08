<!--DARLE SEGURIDAD A LA PAGINA-->
<?php
//va craer una sesion es la funcion que inicia o crea una secion , cuando la secion no se ah creado entonces la crea, pero si la secion ya esta creada inicia la secion en ese archivo.
//ESTO LE DA MAYOR SEGURIDAD A LAS APLICACIONES YA QUE SI PONES ALGUN DATO, CIERRAS EL NAVEGADOR Y VUELVES A ABRIR LA PAGINA SE RESTABLEZCAN O SE REINICIEN Y NO HAYA DATOS.
session_start();
//isset verificar si una variable existe
//signo de admiracion para negacion
if (!isset($_SESSION['cod_usuario'])) header("location: ../login/login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/ranking.css">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	 <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--FUENTE-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@900&display=swap" rel="stylesheet">
	<title>FILM CENTER</title>
	<!--logo-->
	<link rel="icon" type="text/css" href="img/logo.png">
</head>
<body>
	<header>
		<div class="contenedor">
			<h2 class="logotipo">FILM CENTER</h2>
			<nav>
				<a style="color: #D50C0C;"><i class="fa-solid fa-user"></i> <?php echo $_SESSION['nombres']?></a>
				<a href="index.php" >Inicio</a>
				<a href="peliculas.php">Películas</a>
				<a href="ranking.php" class="activo">Ranking</a>
				<a href="../login/login.php"><i class="fa-solid fa-power-off"></i> Cerrar Sesi&oacute;n</a>
			</nav>
		</div>
	</header>

 	<main>
 	
 	<div class="raking">
 		<div class="container">
 			<div class="row">
 				<div class="container">
				  <div class="row">
				    <div class="col">
				
				    </div>
				    <div class="col-12 div_medio">
				      <h2>Películas con las mayores recaudaciones</h2>
 					<?php
 						 	$url = 'https://es.wikipedia.org/wiki/Anexo:Pel%C3%ADculas_con_las_mayores_recaudaciones';
 						 	// file_get_contents transmitir el contenido
 						 	$contenido =file_get_contents($url);

 							$clase = "mw-parser-output";

 							$partes = explode($clase,$contenido);

 							$table= $partes[1];
 							$partes=explode("<dl",$partes[1]);

 							echo $partes[1];
				   		?>
				    </div>
				    <div class="col">
				      
				    </div>
				  </div>
				   
 			</div>

 		</div>
 	</div>











	<footer class="footer text-center">
         	<small>&copy; 2022 <b>Javier Paredes Velasquez</b> - Todos los derechos Reservados.</small>
  	    </footer>
	</main>
	
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../dist/js/app-style-switcher.js"></script>


	<script src="https://kit.fontawesome.com/34cd624114.js" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
 	
</body>
</html>